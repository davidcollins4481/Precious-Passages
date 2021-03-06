<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class p extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('File');
        $this->load->helper('file');
    }

    public function documents() {
        $this->load->view('protected/files.php');
    }

    public function download() {
        $path = $_SERVER['DOCUMENT_ROOT']."/uploads/"; // change the path to fit your websites document structure
        $fullPath = $path.$_GET['download_file'];

        if ($fd = fopen ($fullPath, "r")) {
            $fsize = filesize($fullPath);
            $path_parts = pathinfo($fullPath);
            $ext = strtolower($path_parts["extension"]);
            $mime_type = get_mime_by_extension($fullPath);
            header("Content-type: " . $mime_type); // add here more headers for diff. extensions
            header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a download
            header("Content-length: $fsize");
            header("Cache-control: private"); //use this to open files directly

            while(!feof($fd)) {
                $buffer = fread($fd, 2048);
                echo $buffer;
            }

        }
        fclose ($fd);
    }
}
