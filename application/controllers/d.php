<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class D extends CI_Controller {
    public function index() {
        // this will need changed to home page
        $this->load->view('content/test1.php');
    }
}

/* End of file welcome.php */
