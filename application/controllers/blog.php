<?php
class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    //the home page of the blog
    public function index() {
        $this->load->model('Blog_model', 'blog');
        $session = $this->session;
        $logged_in = $session->userdata('logged_in');
        // sort types newest,oldest

        $sort = 'desc';

        if (isset($_GET['order'])) {
            $order = $_GET['order'];

            if ($order == 'asc' || $order == 'desc') {
                $sort = $order;
            } else {
                $sort = 'desc';
            }
        }

        $entries['query'] = $this->blog->get_all_entries($sort);
        $entries['editable'] = $logged_in ? true : false;
        $entries['sort_order'] = $sort;
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
        
        $data = array();

        if (isset($_GET['entry_id'])) {
            $entry_id = $_GET['entry_id'];
            $this->load->model('Blog_model', 'blog');
            $data['entry'] = $this->blog->get_entry_by_id($entry_id);
        }

        $this->load->view('blog/edit', $data);
    }

    public function edit_post() {
        $session = $this->session;
        if (!$session->userdata('logged_in')) {
            log_message("debug", "not logged in");
            redirect('/');
            return;
        }

        $this->load->model('Blog_model', 'blog');
        // are we editing ?
        if (isset($_POST["entry_id"])) {
            $entry_id           = $_POST["entry_id"];
            $edited_title       = $_POST["title"];
            $edited_entry       = urldecode($_POST["entry"]);
            $edited_url_title   = str_replace(" ", "-", $edited_title);
            $edited_summary     = substr($edited_entry, 0, 500);
            $author             = $session->userdata('username');

            $data = array(
                'entry_id'      => $entry_id,
                'author'        => $author,
                'entry'         => $edited_entry,
                'url_title'     => $edited_url_title,
                'title'         => $edited_title,
                'summary'       => $edited_summary,
                'edited_date'   => date('Y-m-d H:i:s')
            );

            $result = $this->blog->edit_entry($data);
        } else { // new entry
            $title     = $_POST["title"];
            $entry     = urldecode($_POST["entry"]);
            $url_title = str_replace(" ", "-", $title);
            $summary   = substr($entry, 0, 500);
            $author    = $session->userdata('username');

            $data = array(
                'author'        => $author,
                'entry'         => $entry,
                'url_title'     => $url_title,
                'title'         => $title,
                'summary'       => $summary,
                'edited_date'   => date('Y-m-d H:i:s'),
                'creation_date'  => date('Y-m-d H:i:s')
            );

            $result = $this->blog->add_entry($data);
        }

        $result = array(
            'result' => $result,
            'message' => $result ? 'success!' : 'did not work :-('
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }

    public function delete() {
        $session = $this->session;
        if (!$session->userdata('logged_in')) {
            log_message("debug", "not logged in");
            redirect('/');
            return;
        }

        $this->load->model('Blog_model', 'blog');
        $entries['query'] = $this->blog->get_all_entries();
        
        $this->load->view('blog/delete', $entries);
    }

    public function delete_post() {

        $session = $this->session;
        if (!$session->userdata('logged_in')) {
            log_message("debug", "not logged in");
            redirect('/');
            return;
        }

        $entry_id = $_POST["entry_id"];
        
        $this->load->model('Blog_model', 'blog');

        $result = $this->blog->delete_entry($entry_id);

        $result = array(
            'result' => $result,
            'success' => 1,
            'message' => 'success!'
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }
}

/* End of file blog.php */
