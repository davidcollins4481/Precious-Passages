<?php
class Blog_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    //Gets all entries in the blog table
    public function get_all_entries($sort = 'desc') {
        $this->db->select('*'); 
        $this->db->order_by('creation_date ' . $sort);
        $query = $this->db->get('blog');
        
        if ($query->num_rows() > 0)
        {
          return $query->result();
        } else {
          return array();
        }
    }

    //gets a single entry based on its url title
    public function get_entry($url_title) {
        $this->db->select('*')->where('url_title', $url_title);
        $query = $this->db->get('blog', 1);
      
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false; 
        }
    }

    public function add_entry($data) {
        $this->db->insert('blog', $data); 
    }

    public function delete_entry($entry_id) {
        return $this->db->delete('blog', array('entry_id' => $entry_id));
    }
}

/* End of file blog_model.php */
?> 
