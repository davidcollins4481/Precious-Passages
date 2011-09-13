<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_all() {
        $sql = "select * from files";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function add_file($args) {
        $filename    = $args["filename"];
        $description = $args["description"];

        if ($this->exists($filename)) {
            return;
        }
        
        $data = array(
               'filename' => $filename,
               'description' => $description
            );

        $this->db->insert('files', $data); 
        
        return array(
            'success' => 1,
            'message' => 'File successfully created'
        );
    }

    function delete($id) {
        $data = array(
            'id' => $id
        );

        $result = $this->db->delete('files', $data);

        return array(
            'success' => $result,
            'message' => $result ? 'File has been deleted' : 'An error has occurred'
        );
    }

    function exists($filename) {
        $sql = 
            "select * from files where filename = " . $this->db->escape($filename) . ";";

        $query = $this->db->query($sql);
        
        $row = $query->row_array();
        
        return count($row) > 0;
    }
}
