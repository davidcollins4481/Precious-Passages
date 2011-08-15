<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class d extends CI_Controller {

    public function index() {
        $this->load->view('sample.php');
    }

    // /d/billOfRights
    public function billOfRights() {
        $this->load->view('billOfRights.php');
    }

    //public function _remap($method) {
    //    log_message("debug", "remap");
    //}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
