<?php
class Static_content_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    //Gets all entries in the blog table
    public function get_all_entries($sort = 'desc') {
        $this->db->select('*'); 

        $query = $this->db->get('static_index');
        
        if ($query->num_rows() > 0)
        {
          return $query->result();
        } else {
          return array();
        }
    }
    
    public function search($args) {
        $search_term = $args['query'];
        $this->db->like('text',$search_term);
        $this->db->or_like('title',$search_term);
        $query = $this->db->get('static_index');
        $results = $query->result();

        $processed_results = array();

        foreach ($results as $result) {
            $entry = $result->text;
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
                'url'             => $result->url,
                'title'           => $result->title,
                'context_segment' => $context
            ));
        }

        return $processed_results;
    }
}

/* End of file blog_model.php */
?> 
