<?php
class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_model', 'blog');
        $this->load->model('static_content_model', 'static_content');
    }

    //the home page of the blog
    public function index() {        
        $query = isset($_GET['query']) ? $_GET['query'] : '';

        $data = array();

        if (!$query) {
            $data['message'] = 'no search term(s) provided';
            $this->load->view('search', $data);
            return;
        }
        
        $args = array(
            'query' => $query
        );

        $static_results = $this->static_content->search($args);
        $blog_results   = $this->blog->search($args);

        $results = array_merge($blog_results,$static_results);

        if (!count($results)) {
            $data['message'] = 'There are no results for the search phrase ' . '<b>"' . $query . '"</b>';
        } else {
            $count = count($results);
            
            // highlight the context
            for ($i = 0; $i < count($results); $i++) {
                $results[$i]['context_segment'] = 
                    str_replace($query, '<b style="background-color:yellow">' . $query . '</b>', $results[$i]['context_segment']);
            }

            $data['message'] = ($count == 1) ? 
                'There is <i>1</i> result for the search phrase ' . '<b>"' . $query . '"</b>'
                :
                'There are <i>' . $count . '</i> results for the search phrase ' . '<b>"' . $query . '"</b>';
        }

        $data['query'] = $results;
        $this->load->view('search', $data);
    }
}
