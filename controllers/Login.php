<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->model('login_model'); // Load the login_model
   }

   public function index() {
      $this->load->view('login');
   }

   public function process_login() {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      // Call the login model to check user credentials
      $result = $this->login_model->validate_user($username, $password);


      if ($result) {
      $this->load->library('session');
      $this->session->set_userdata('user_data', $result);
		$this->session->set_userdata('username', $username);
      $user_role = $result['role'];
      echo $user_role;
      $redirect_url = '';
       switch ($user_role) {
         case 'employee':
             $redirect_url = 'user/dashboard';
             break;
         case 'manager':
             $redirect_url = 'manager/dashboard';
             break;
         default:
             $redirect_url = 'default/dashboard';
             break;
     }
     redirect($redirect_url);
      } else {
         // Failed login
         $this->session->set_flashdata('error_message', 'Invalid username or password');
         redirect('login');
      }
   
   }

   public function logout() {
      $this->load->library('session');
      $this->session->sess_destroy(); // Destroy the session
  
      // Redirect to the login page or any other page after logout
      redirect('login');
  }


}
