<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gallery extends CI_Controller {

    public function index() {
        $this->load->library('zend');
        $this->zend->load('Zend/Gdata/Photos');
        $this->zend->load('Zend/Gdata/Photos/AlbumQuery');

        $gp = new Zend_Gdata_Photos();
        $images = array();

        try {
            $query = $gp->newAlbumQuery();

            /*
             * Erika's user: abbeysmom1971@gmail.com
             * Album Id: 5647822452656257313
             */
            $query->setUser("abbeysmom1971");

            // album MUST be set to public for this to work!
            // comes from URL of RSS feed for album
            //$query->setAlbumId("5555395504381076721");
            $query->setAlbumId("5647822452656257313");
            $query->setImgMax('640');
            $albumFeed = $gp->getAlbumFeed($query);

            foreach ($albumFeed as $photoEntry) {
                $photoEntry = $photoEntry->setGphotoWidth(500);
                $mediaContentArray = $photoEntry->getMediaGroup()->getContent();
                $src = $mediaContentArray[0]->getUrl();

                $title = $photoEntry->summary->text;

                $mediaThumbnailArray = $photoEntry->getMediaGroup()->getThumbnail(72);
                $thumb = $mediaThumbnailArray[1]->getUrl();

                array_push($images, array(
                    "src"   => $src,
                    "thumb" => $thumb,
                    "title" => $title
                ));
            }
        } catch (Zend_Gdata_App_Exception $e) {
            // hmm...not sure i want to do this here
            echo "Error: " . $e->getMessage();
        }

        $data['images'] = $images;
        $this->load->view('gallery.php', $data);
    }
}
