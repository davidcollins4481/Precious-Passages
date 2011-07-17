<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('Erkanaauth');
        $this->load->model('User');
    }
    
    public function index() {
        $this->load->view('admin/index.php');
    }
    
    public function create_user() {
        $this->load->view('admin/create_user.php');
    }
    
    public function delete_user() {
        $data = array(
            'users' => 1
        );
        
        $this->load->view('admin/delete_user.php', $data);
    }
    
    public function create_new_user_json() {
        $user = $this->user;
        
        $username  = $_POST["username"];
        $password  = $_POST["password"];
        $confirm   = $_POST["confirm"];
        
        $check = $this->validateUserForm(array(
            'username' => $username,
            'password' => $password,
            'confirm'  => $confirm
        ));
        
        if (!$check['valid']) {
            $result = array(
                'created' => 0,
                'message' => $check['message']
            );
        } else {
            $result = $user->create_new_user($username, $password);
        }
        
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }
    
    private function validateUserForm($fields) {
        $username = $fields['username'];
        $password = $fields['password'];
        $password_confirm = $fields['confirm'];
        
        log_message('debug', "password: " . $password);
        log_message('debug', "confirm: " . $password_confirm);
        
        $valid = 1;
        $message = "";
        
        if ($password != $password_confirm) { // is this how you compare strings in PHP?
            $valid = 0;
            log_message('debug', "NOT VALID");
            $message = "passwords do not match";
        }
        
        return array(
            'valid'   => $valid,
            'message' => $message
        );
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
