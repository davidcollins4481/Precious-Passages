<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('Erkanaauth'); 
    }
    
    public function index() {
        $this->load->view('welcome_message');
    }
    
    public function test() {
        $this->load->view('index.html');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
