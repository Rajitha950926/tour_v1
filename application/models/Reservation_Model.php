<?php


class Reservation_Model extends CI_Model
{
     public function booking_data()
     {

         $data =  array(
             'hotel_name' => $this->input->post('hotel'),
             'name' => $this->input->post('name'),
             'contact_no' => $this->input->post('contact'),
             'email' => $this->input->post('email'),
             'check_in' => $this->input->post('check_in'),
             'check_out' => $this->input->post('check_out'),
             'adults' => $this->input->post('adult'),
             'children' => $this->input->post('children'),
             'notice' => $this->input->post('notice')
         );

         $this->db->insert('reservation',$data);
     }
}