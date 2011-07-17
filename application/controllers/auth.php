<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('Erkanaauth');
    }

    public function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        /*
        $this->erkanaauth->try_login(
            array(
                'username' => $username,
                'password'=> $password
            )
        );*/
        
        $result = array(
            'success' => 1,
            'message' => "test message"
        );
        
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
