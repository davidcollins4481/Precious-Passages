<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

    var $username   = '';
    var $password = '';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_all() {
        $sql = "select * from users";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    // validate before getting here
    function create_new_user($username, $password) {
        // check if the user exists
        
        if ($this->exists($username)) {
            return array(
                'success' => 0,
                'message'   => 'user already exists'
            );
        }
        
        $data = array(
               'username' => $username,
               'password' => $password
            );

        $this->db->insert('users', $data); 
        
        return array(
            'success' => 1,
            'message' => 'User successfully created'
        );
    }

    function delete($user_id) {
        $data = array(
            'id' => $user_id
        );

        $result = $this->db->delete('users', $data);

        return array(
            'success' => $result,
            'message' => $result ? 'User has been deleted' : 'An error has occurred'
        );
    }

    function exists($username) {
        $sql = 
            "select * from users where username = " . $this->db->escape($username) . ";";

        $query = $this->db->query($sql);
        
        $row = $query->row_array();
        
        return count($row) > 0;
    }
}
