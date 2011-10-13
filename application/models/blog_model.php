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

    public function search($args) {
        $match = $args['query'];
        $this->db->like('entry',$match);
        $this->db->or_like('author',$match);
        $this->db->or_like('title',$match);
        $this->db->or_like('summary',$match);
        $query = $this->db->get('blog');
        $results = $query->result();
        
        $processed_results = array();
        
        foreach ($results as $result) {
            array_push($processed_results, array(
                'url'             => $result->url_title,
                'title'           => $result->title,
                'context_segment' => 'test context'
            ));
        }
        
        return $processed_results;
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

    public function get_entry_by_id($entry_id) {
        $this->db->select('*')->where('entry_id', $entry_id);
        $query = $this->db->get('blog', 1);
      
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false; 
        }
    }

    public function edit_entry($data) {
        $entry_id = $data['entry_id'];
        unset($data['entry_id']);
        $this->db->where('entry_id', $entry_id);
        return $this->db->update('blog', $data);
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
