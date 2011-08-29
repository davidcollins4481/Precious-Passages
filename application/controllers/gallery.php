<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gallery extends CI_Controller {

    public function index() {
        $this->load->library('zend');
        $this->zend->load('Zend/Gdata/Photos');
        $this->zend->load('Zend/Gdata/ClientLogin');
        $this->zend->load('Zend/Gdata/Photos/AlbumQuery');

        $gp = new Zend_Gdata_Photos();

        try {
            $query = $gp->newAlbumQuery();

            $query->setUser("davidcollins4481");
            // album MUST be set to public for this to work!
            // comes from URL of RSS feed for album

            //$query->setAlbumId("5577722144030642753");
            //$query->setAlbumName("Arizona");

            $albumFeed = $gp->getAlbumFeed($query);

            foreach ($albumFeed as $photoEntry) {
                echo "***<br/>";

                // See Gdata/App/FeedEntryParent.php
                echo $photoEntry->title->text. "<br />";
                $mediaContentArray = $photoEntry->getMediaGroup()->getContent();
                $contentUrl = $mediaContentArray[0]->getUrl();
                echo $contentUrl;

                echo "<br/>***";
            }
        } catch (Zend_Gdata_App_Exception $e) {
            // hmm...not sure i want to do this here
            echo "Error: " . $e->getMessage();
        }

        $this->load->view('gallery.php');
    }
}
