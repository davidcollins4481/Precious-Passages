<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('Erkanaauth');
        $this->load->model('User');

        $session = $this->session;
        if (!$session->userdata('logged_in')) {
            log_message("debug", "not logged in");
            redirect('/');
        }
    }
    
    public function index() {
        $this->load->view('admin/index.php');
    }

    public function create_user() {
        $this->load->view('admin/create_user.php');
    }
    
    public function delete_user() {
        $data = array(
            'users' => $this->user->get_all(),
        );
        
        $this->load->view('admin/delete_user.php', $data);
    }
   
    public function upload() {
        $this->load->view('admin/upload.php', array('error' => ' ' ));
    }

    function do_upload() {
        $config['upload_path'] = 'uploads';
        $config['allowed_types'] = '*';
        //$config['max_size']    = '100';
        //$config['max_width']  = '1024';
        //$config['max_height']  = '768';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('admin/upload.php', $error);
        }
        else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('admin/upload_success', $data);
        }
    }

    public function create_new_user_post_json() {
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
                'success' => 0,
                'message' => $check['message']
            );
        } else {
            $result = $user->create_new_user($username, $password);
        }
        
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }
    
    public function delete_user_post_json() {
        $user_id = $_POST["user_id"];
        $result = $this->user->delete($user_id);

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
