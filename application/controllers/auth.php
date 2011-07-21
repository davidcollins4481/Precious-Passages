<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('Erkanaauth');
        $this->load->library('session');
    }

    public function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $success = $this->erkanaauth->try_login(
            array(
                'username' => $username,
                'password'=> $password
            )
        );

        log_message("debug", "Success? " . $success . " User: " . $username);

        $session = $this->session;
        
        if ($success) {
            $session->set_userdata('logged_in', TRUE);
        }

        $result = array(
            'success' => $success,
            'message' => "test message",
            'data'    => $success ? array( 
                'username' => $username
            ) : array()
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
