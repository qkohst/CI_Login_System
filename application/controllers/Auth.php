<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'CodeIgniter LS | Login';
    $this->load->view('layouts/auth_header', $data);
    $this->load->view('auth/login');
    $this->load->view('layouts/auth_footer');
  }

  public function registration()
  {
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]');
    $this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|matches[password1]');


    if ($this->form_validation->run() == false) {
      $data['title'] = 'CodeIgniter LS | Register';
      $this->load->view('layouts/auth_header', $data);
      $this->load->view('auth/registration');
      $this->load->view('layouts/auth_footer');
    } else {
      $data = [
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'image' => 'default.jpg',
        'password' => password_hash($this->input->post('email'), PASSWORD_DEFAULT),
        'role_id' => 2,
        'is_active' => 1,
        'date_created' => time()
      ];

      $this->db->insert('user', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been registered. Please Login</div>');
      redirect('auth');
    }
  }
}
