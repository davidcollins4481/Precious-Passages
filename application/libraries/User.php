<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class User {
    function User() {
        $this->CI =& get_instance();
        $this->CI->load->database();
    }

    // validate before getting here
    public function create_new_user($username, $password) {
        
        // check if the user exists
        
        if ($this->userExists($username)) {
            return array(
                'created' => 0,
                'message'   => 'user already exists'
            );
        }
        
        $data = array(
               'username' => $username,
               'password' => $password
            );

        $this->CI->db->insert('users', $data); 
        
        return array(
            'created' => 1,
            'message' => 'User successfully created'
        );
    }
    
    private function userExists($username) {
        $sql = 
            "select * from users where username = " . $this->CI->db->escape($username) . ";";

        $query = $this->CI->db->query($sql);
        
        $row = $query->row_array();
        
        return count($row) > 0;
    }
}

/* End of file Someclass.php */
