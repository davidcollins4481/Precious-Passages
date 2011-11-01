<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('Erkanaauth');
        $this->load->model('User');
        $this->load->model('File');

        $session = $this->session;
        if (!$session->userdata('logged_in')) {
            log_message("debug", "not logged in");
            redirect('/');
        }
    }
    
    public function index() {
        $this->load->view('admin/index.php');
    }

    public function create_user() {
        $this->load->view('admin/create_user.php');
    }
    
    public function delete_user() {
        $data = array(
            'users' => $this->user->get_all(),
        );
        
        $this->load->view('admin/delete_user.php', $data);
    }
   
    public function upload() {
        $all_files = $this->file->get_all();
        $this->load->view('admin/upload.php', array('message' => ' '));
    }

    function do_upload() {
        $config['upload_path'] = 'uploads';
        $config['allowed_types'] = '*';

        $this->load->library('upload', $config);

        $upload_success = $this->upload->do_upload();
        $upload_data = $this->upload->data();

        $filename = $upload_data["file_name"];

        $description = $_POST["description"];
        $file = $this->file;

        $exists = $file->exists($filename);

        if ($exists || ! $upload_success) {
            $message = $exists ? 'File already exists' : $this->upload->display_errors();
            $error = array('message' => $message, 'error' => 1);

            $this->load->view('admin/upload.php', $error);
        } else {

            $result = $file->add_file(array(
                'filename'    => $filename,
                'description' => $description
            ));

            if (!$result["success"]) {
                $this->load->view('admin/upload.php', array('message' => $result["message"], 'error' => 1 ));
            } else {
                $data = array('message' => 'File uploaded successfully');
                $this->load->view('admin/upload.php', $data);
            }
        }
    }

    public function delete_file() {
        $id = $_GET["id"];

        $file = $this->file;
        $selected = $file->get_file($id);

        // TODO: get this path into the config
        unlink('uploads/' . $selected['filename']);

        $file->delete($id);

        $message = array('message' => 'File deleted successfully');
        $this->load->view('admin/upload.php', $message);
    }

    public function create_new_user_post_json() {
        $user = $this->user;
        
        $username  = $_POST["username"];
        $password  = $_POST["password"];
        $confirm   = $_POST["confirm"];
        
        $check = $this->validateUserForm(array(
            'username' => $username,
            'password' => $password,
            'confirm'  => $confirm
        ));
        
        if (!$check['valid']) {
            $result = array(
                'success' => 0,
                'message' => $check['message']
            );
        } else {
            $result = $user->create_new_user($username, $password);
        }
        
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }
    
    public function delete_user_post_json() {
        $user_id = $_POST["user_id"];
        $result = $this->user->delete($user_id);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }
    
    private function validateUserForm($fields) {
        $username = $fields['username'];
        $password = $fields['password'];
        $password_confirm = $fields['confirm'];
        
        log_message('debug', "password: " . $password);
        log_message('debug', "confirm: " . $password_confirm);
        
        $valid = 1;
        $message = "";
        
        if ($password != $password_confirm) { // is this how you compare strings in PHP?
            $valid = 0;
            log_message('debug', "NOT VALID");
            $message = "passwords do not match";
        }
        
        return array(
            'valid'   => $valid,
            'message' => $message
        );
    }
    
    public function create_search_index () {
        
        while (false !== ($file = readdir($handle))) {
            if ($file == "." || $file == "..") {
                continue;
            }

            $start_delimiter = "<!-- unique -->";
            $end_delimiter   = "<!-- \/unique -->"; 

            $output = file_get_contents("static/" . $file);
        
            $flattened_file = $this->flatten($output);
            
            preg_match("/$start_delimiter(.*)$end_delimiter/", $flattened_file, $matches);
            
            
            $content = $matches[1];
            
            // strip html
            $content = strip_tags($content);

            echo $file . "," . $content, "\n";
        }
        
        $result = array(
            'result' => $content
        );
        
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
            
    }
    
    private function flatten($string) {
        return (string)preg_replace(array("/\r/", "/\r\n/", "/\n/", "/\s\s+/"), '', $string);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
