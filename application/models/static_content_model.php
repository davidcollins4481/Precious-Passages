<?php
class Static_content_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    //Gets all entries in the blog table
    public function get_all_entries($sort = 'desc') {
        $this->db->select('*'); 

        $query = $this->db->get('static_index');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function search($args) {
        $search_term = $args['query'];
        $this->db->like('entry',$search_term);
        $this->db->or_like('title',$search_term);
        $query = $this->db->get('static_index');
        $this->load->helper('search_helper');
        $results = $query->result();

        $processed_results = contextualize_results($results, $search_term);

        return $processed_results;
    }
}

/* End of file blog_model.php */
?> 
