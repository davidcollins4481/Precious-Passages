<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller {
    //public function index() {
    //    $this->load->view('welcome_message');
    //}

    public function test1() {
        $this->load->view('content/test1.php');
    }

    public function test2() {
        $this->load->view('content/test2.php');
    }
}
