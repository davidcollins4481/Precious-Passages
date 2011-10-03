<?php
class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    //the home page of the blog
    public function index() {
        $this->load->model('Blog_model', 'blog');
        $entries['query'] = $this->blog->get_all_entries();
        $this->load->view('blog/index', $entries);
    }

    //For an individual entry, the url title is used to grab 
    //the entry
    public function entry($url_title = "") {
        $this->load->helper('url');
      
        if ($url_title) {
            $this->load->model('Blog_model', 'blog');
            $entry_data['post'] = $this->blog->get_entry($url_title);
        
            if(!$entry_data['post']){
                redirect('/blog', 'location');
            } else {
                $this->load->view('blog/entry', $entry_data);
            }
        } else {
            redirect('/blog', 'location');
        }
    }

    public function edit() {
        $session = $this->session;
        if (!$session->userdata('logged_in')) {
            log_message("debug", "not logged in");
            redirect('/');
            return;
        }
        
        $this->load->view('blog/edit');
    }

    public function edit_post() {
        $session = $this->session;
        if (!$session->userdata('logged_in')) {
            log_message("debug", "not logged in");
            redirect('/');
            return;
        }

        $title     = $_POST["title"];
        $entry     = urldecode($_POST["entry"]);
        $url_title = str_replace(" ", "-", $title);
        $summary   = substr($entry, 500);
        $author    = $session->userdata('username');

        $data = array(
            'author'    => $author,
            'entry'     => $entry,
            'url_title' => $url_title,
            'title'     => $title,
            'summary'   => $summary
        );
        
        $this->load->model('Blog_model', 'blog');
        $this->blog->add_entry($data);

        $result = array(
            'result' => 1,
            'message' => 'success!'
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }
}

/* End of file blog.php */
