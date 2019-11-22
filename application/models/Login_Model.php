<?php


class Login_Model extends CI_Model
{
  public function user_login()
  {
     $email = $this->input->post('email');
     $password = sha1($this->input->post('password'));

     $this->db->where('email',$email);
     $this->db->where('password',$password);

      $respond = $this->db->get('user_details');

     if($respond->num_rows()==1){
         return $respond ;
     }else{
         return false;
     }
  }
}