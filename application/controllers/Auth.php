<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function index()
  {
    $this->load->view('layouts/auth_header');
    $this->load->view('auth/login');
    $this->load->view('layouts/auth_footer');
  }
  
  public function registration()
  {
    $this->load->view('layouts/auth_header');
    $this->load->view('auth/registration');
    $this->load->view('layouts/auth_footer');
  }

}
