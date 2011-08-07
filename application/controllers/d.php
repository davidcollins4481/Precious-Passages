<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class D extends CI_Controller {
 
    public function index() {
        $this->load->view('sample.php');
    }
    
    public function billOfRights() {
        $this->load->view('billOfRights.php');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
