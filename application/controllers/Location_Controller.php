<?php


class Location_Controller extends CI_Controller
{
 public function L_Adventure()
 {
   $this->load->model('Location_Model');
  $data['query'] = $this->Location_Model->get_location('');
     $this->load->view('location_cat/adventure', $data);

 }

 public function L_Hiking()
 {
    $this->load->view('location_cat/hiking');
 }

 public function L_Surfing()
 {
     $this->load->view('location_cat/surfing');
 }

 public function L_Natural()
 {
     $this->load->view('location_cat/natural');
 }

 public function L_Wild_Safari()
 {
     $this->load->view('location_cat/wild_safari');
 }

 public function L_Ancient()
 {
     $this->load->view('location_cat/ancient');
 }
}