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

                $count_from_start = $length - ($length - $point);

                // how many chars in front and back to be shown
                /*
                 * This logic is a bit of a disaster
                 */
                $context_length = 250;
                $start;
                $end;

                if ($count_from_start - ($context_length/2) < 0) {
                    log_message('debug', "case 1: ");
                    $start = 0;
                    $end = $point + strlen($search_term) + ($context_length / 2);
                } else if ($point + strlen($search_term) + ($context_length/2) >= $length) {
                    log_message('debug', "case 2: ");
                    $distance_to_end = $point + strlen($search_term) + ($context_length/2) - $length;
                    $start = $point - ($context_length/2) + $distance_to_end;
                    $end = $length;
                } else {
                    log_message('debug', "case 3: ");

                    $start = $point - ($context_length/2);
                    $end = $point + strlen($search_term) + ($context_length/2);
                    log_message('debug', "point: " . $point);
                    log_message('debug', "start: " . $start);
                    log_message('debug', "end: " . $end);
                }

                $context = substr($entry, $start, $end - $start);

                array_push($processed_results, array(
                    'url'             => $result->url,
                    'title'           => $result->title,
                    'context_segment' => $context
                ));
            }
        }

        return $processed_results;
    }
}

/* End of file blog_model.php */
?> 
