<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation_Controller extends CI_Controller
{
   public function reserve()
   {
       $this->load->view('home');
       $this->load->model('Reservation_Model');
       $this->Reservation_Model->booking_data();
   }
}