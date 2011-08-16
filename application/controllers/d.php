<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class d extends CI_Controller {

    public function index() {
        $this->load->view('sample.php');
    }

    /* Add functions for static pages below this point */
    
    // Sample URL: /d/billOfRights
    public function billOfRights() {
        $this->load->view('billOfRights.php');
    }

    public function birthingFromWithin() {
        $this->load->view('birthingFromWithin.php');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
