<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class D extends CI_Controller {
 
    public function index() {
        $this->load->view('sample.php');
    }
    
    public function sample() {
        $this->load->view('sample.php');
    }
    
    public function test() {
        $this->load->view('content/test1.php');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
