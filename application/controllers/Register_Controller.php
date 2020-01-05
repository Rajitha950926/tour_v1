<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_Controller extends CI_Controller
{
   public function RegisterUser()
  {
      $this-> form_validation->set_rules('user','User Name','required|is_unique[user_details.user_name]');
      $this-> form_validation->set_rules('email','Email','required|is_unique[user_details.email]');
      $this-> form_validation->set_rules('password','Password','required');
      $this-> form_validation->set_rules('c_password','Confirm Password','required|matches[password]');

      if ($this->form_validation->run()==false){
            $this->load->view('register.php');

      }else{
          $this->load->model('Register_Model');
          $this->Register_Model->insert_data();
          $this->load->view('login');
      }


  }

}