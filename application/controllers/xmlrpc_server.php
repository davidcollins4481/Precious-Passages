<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Xmlrpc_server extends CI_Controller {

    function index() {
        $this->load->library('xmlrpc');
        $this->load->library('xmlrpcs');
        $this->load->library('User');
        $config['functions']['Greetings'] = array('function' => 'Xmlrpc_server.process');
        $config['functions']['create_new_user'] = array('function' => 'User.create_new_user');
        // just conditionally select object here?
        $config['object'] = $this->user;
        $this->xmlrpcs->initialize($config);
        $this->xmlrpcs->serve();
    }

    function process($request) {
        $parameters = $request->output_parameters();

        $response = array(
                            array(
                                    'you_said'  => $parameters['0'],
                                    'i_respond' => 'Not bad at all.'),
                            'struct');

        return $this->xmlrpc->send_response($response);
    }
}
?>
