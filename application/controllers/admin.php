<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('Erkanaauth'); 
    }
    
    public function index() {
        $this->load->view('admin/index.php');
    }
    
    public function create_user() {
        $this->load->view('admin/create_user.php');
    }
    
    public function create_user_post() {
        log_message('level', 'messageajdsaslkd');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
