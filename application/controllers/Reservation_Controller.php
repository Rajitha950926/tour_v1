<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation_Controller extends CI_Controller
{
   public function reserve()
   {
       echo '<script>alert("You Have Successfully Reserved Your Order");</script>';

       $this->load->view('reservation');
       $this->load->model('Reservation_Model');
       $this->Reservation_Model->booking_data();

   }
}