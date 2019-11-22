<?php


class Login_Controller extends CI_Controller
{
 public function Login()
 {
     $this->load->model('Login_Model');
    $result =  $this->Login_Model->user_login();

     if($result == true){
         $this->load->view('location_cat');
     }else{
         $this->load->view('login');
     }
 }
}