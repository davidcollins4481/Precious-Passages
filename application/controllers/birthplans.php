<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class birthplans extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function samplePlanOne() {
        $this->load->view('birthplans/plan1.php');
    }
    
    public function samplePlanTwo() {
        $this->load->view('birthplans/plan2.php');
    }
}
