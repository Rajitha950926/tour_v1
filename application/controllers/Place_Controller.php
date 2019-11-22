<?php


class Place_Controller extends CI_Controller
{
   public function P_Hotel()
   {
       $this->load->model('Place_Model');
       $data['query'] = $this->Place_Model->get_place();
       $this->load->view('place_cat/hotel',$data);

   }

   public function P_Hotel2($da)
   {
       $this->load->model('Place_Model');
       $data['respond']=$this->Place_Model->get_review($da);
       $this->load->view('place_details',$data);

   }


    public function P_Kabana()
   {
       $this->load->view('place_cat/kabana');
   }

   public function P_Bungalow()
   {
       $this->load->view('place_cat/bangalow');
   }

   public function P_Other()
   {
       $this->load->view('place_cat/other');
   }

   public function P_Guest()
   {
       $this->load->view('place_cat/guest_house');
   }

   public function P_Restaurants()
   {
       $this->load->view('place_cat/restaurants');
   }
}