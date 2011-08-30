<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gallery extends CI_Controller {

    public function index() {
        $this->load->library('zend');
        $this->zend->load('Zend/Gdata/Photos');
        $this->zend->load('Zend/Gdata/ClientLogin');
        $this->zend->load('Zend/Gdata/Photos/AlbumQuery');

        $gp = new Zend_Gdata_Photos();
        $images = array();

        try {
            $query = $gp->newAlbumQuery();

            $query->setUser("davidcollins4481");
            // album MUST be set to public for this to work!
            // comes from URL of RSS feed for album

            $query->setAlbumId("5555395504381076721");
            //$query->setAlbumId("5605589389953306209"); //arizona
            $albumFeed = $gp->getAlbumFeed($query);

            foreach ($albumFeed as $photoEntry) {
                $mediaContentArray = $photoEntry->getMediaGroup()->getContent();
                $src = $mediaContentArray[0]->getUrl();

                $title = $photoEntry->title->text;

                array_push($images, array(
                    "src"   => $src,
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
