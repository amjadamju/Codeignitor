<?php
class User extends CI_Controller
{
    function __construct()
    {
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('user_model');
    //   if (!$this->session->userdata('sess_logged_in') == 1 or !$this->user_model->is_available($this->session->email) == TRUE) {
    //     echo "You are not authorized . Contact Web Admin !!!!<br><br>";
    //     $login_url = $this->googleplus->loginURL();
    //     echo "<a href=\"$login_url\">Please login again !!</a><br><br>";
    //     $url = base_url('auth/logout');
    //     echo "<a href=\"$url\">Return To Home</a>";
    //     exit;
    //   }
    }
}
