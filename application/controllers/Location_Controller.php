<?php


class Location_Controller extends CI_Controller
{
 public function L_Adventure()
 {
   $this->load->model('Location_Model');
  $data['query'] = $this->Location_Model->get_location('');
     $this->load->view('location_cat/adventure', $data);
 }

 public function L_Adventure2($id)
 {
     $this->load->model('Location_Model');
     $data['respond']=$this->Location_Model->get_location_des($id);
     $this->load->view('location_details',$data);
 }

    public function L_Hiking()
 {
     $this->load->model('Location_Model');
     $data['query1'] = $this->Location_Model->get_location('');
    $this->load->view('location_cat/hiking', $data);
 }

 public function L_Surfing()
 {
     $this->load->model('Location_Model');
     $data['query'] = $this->Location_Model->get_location('');
     $this->load->view('location_cat/surfing',$data);
 }

 public function L_Natural()
 {
     $this->load->model('Location_Model');
     $data['query'] = $this->Location_Model->get_location('');
     $this->load->view('location_cat/natural', $data);
 }

 public function L_Wild_Safari()
 {
     $this->load->model('Location_Model');
     $data['query'] = $this->Location_Model->get_location('');
     $this->load->view('location_cat/wild_safari',$data);
 }

 public function L_Ancient()
 {
     $this->load->model('Location_Model');
     $data['query'] = $this->Location_Model->get_location('');
     $this->load->view('location_cat/ancient',$data);
 }
}