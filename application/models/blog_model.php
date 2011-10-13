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
        $search_term = $args['query'];
        $this->db->like('entry',$search_term);
        $this->db->or_like('author',$search_term);
        $this->db->or_like('title',$search_term);
        $this->db->or_like('summary',$search_term);
        $query = $this->db->get('blog');
        $results = $query->result();

        $processed_results = array();

        foreach ($results as $result) {
            $entry = $result->entry;
            $point = strpos($entry, $search_term);

            if ($point) {
                $length = strlen($entry);
                $count_from_start = $length - $point;

                // how many chars in front and back to be shown
                /*
                 * This logic is a bit of a disaster
                 */
                $context_length = 250;
                $start;
                $end;
                if ($count_from_start < $context_length) {
                    $start = 0;
                    $end = $point + strlen($search_term) + $context_length;
                } else if (strlen($search_term) + $context_length >= $length) {
                    $start = $context_length;
                    $end = $start + strlen($search_term) + $context_length;
                } else {
                    $start = 0;
                    $end = $point + strlen($search_term) + $context_length;
                }

                $context = substr($entry, $start, $end);
            }

            array_push($processed_results, array(
                'url'             => $result->url_title,
                'title'           => $result->title,
                'context_segment' => $context
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
