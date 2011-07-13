<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class User {
    function User() {
        $this->CI =& get_instance();
    }
    
    public function create_new_user($request) {
        
        $parameters = $request->output_parameters();

        $response = array(
                            array(
                                    'you_said'  => $parameters['0'],
                                    'i_respond' => 'firing this shit bitch.'),
                            'struct');

        return $this->CI->xmlrpc->send_response($response);
        
    }

}

/* End of file Someclass.php */
