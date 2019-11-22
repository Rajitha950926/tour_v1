<?php


class L_Details_Controller extends CI_Controller
{
   public function l_details()
   {
//       $this->load->model('Location_Model');
//       $data['query'] = $this->Location_Model->get_location();
      $this->load->view('place');

   }
}