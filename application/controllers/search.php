<?php
class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_model', 'blog');
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

        $data['query'] = $this->blog->search($args);

        if (!count($data['query'])) {
            $data['message'] = 'There are no results for the search phrase ' . '<b>"' . $query . '"</b>';
        } else {
            $count = count($data['query']);
            
            $data['message'] = ($count == 1) ? 
                'There is <i>1</i> result for the search phrase ' . '<b>"' . $query . '"</b>'
                :
                'There are <i>' . $count . '</i> results for the search phrase ' . '<b>"' . $query . '"</b>';
        }

        $this->load->view('search', $data);
    }
}
