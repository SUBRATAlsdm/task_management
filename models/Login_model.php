<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

   public function validate_user($username, $password) {//to check the user is valid or not
      // Assuming your table is named 'user' in the database 'dataTable'
      $this->db->where('username', $username);
      $this->db->where('password', /* md5($password) */ $password);

      $query = $this->db->get('users');//user is the dataTable name

      

      if ($query->num_rows() == 1) {
         return $query->row_array();
      } else {
         return false; // Invalid user
      }
   }
}