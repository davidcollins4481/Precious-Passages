<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
    support for mobile views directory
 */

class MY_Loader extends CI_Loader {

    function __construct()
    {
        parent::__construct();

        //$this->CI =& get_instance();
        $agent = load_class('User_agent');
        $mobile = $agent->is_mobile || $_COOKIE["mobile"];

        if ($mobile) {
            $this->_ci_view_path = APPPATH.'views/mobile/';
        }
    }
}
