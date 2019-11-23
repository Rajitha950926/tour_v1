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
       $data['respond2']=$this->Place_Model->get_review_des($da);
       $this->load->view('place_details',$data);

   }

    public function P_Kabana()
   {
       $this->load->model('Place_Model');
       $data['query'] = $this->Place_Model->get_place();
       $this->load->view('place_cat/kabana',$data);
   }

    public function P_Kabana2($da)
    {
        $this->load->model('Place_Model');
        $data['respond']=$this->Place_Model->get_review($da);
        $data['respond2']=$this->Place_Model->get_review_des($da);
        $this->load->view('place_details',$data);

    }

   public function P_Bungalow()
   {
       $this->load->model('Place_Model');
       $data['query'] = $this->Place_Model->get_place();
       $this->load->view('place_cat/bangalow',$data);
   }

    public function P_Bungalow2($da)
    {
        $this->load->model('Place_Model');
        $data['respond']=$this->Place_Model->get_review($da);
        $data['respond2']=$this->Place_Model->get_review_des($da);
        $this->load->view('place_details',$data);

    }

   public function P_Other()
   {
       $this->load->model('Place_Model');
       $data['query'] = $this->Place_Model->get_place();
       $this->load->view('place_cat/other',$data);
   }

    public function P_Other2($da)
    {
        $this->load->model('Place_Model');
        $data['respond']=$this->Place_Model->get_review($da);
        $data['respond2']=$this->Place_Model->get_review_des($da);
        $this->load->view('place_details',$data);

    }

   public function P_Guest()
   {
       $this->load->model('Place_Model');
       $data['query'] = $this->Place_Model->get_place();
       $this->load->view('place_cat/guest_house',$data);
   }

    public function P_Guest2($da)
    {
        $this->load->model('Place_Model');
        $data['respond']=$this->Place_Model->get_review($da);
        $data['respond2']=$this->Place_Model->get_review_des($da);
        $this->load->view('place_details',$data);

    }

   public function P_Restaurants()
   {
       $this->load->model('Place_Model');
       $data['query'] = $this->Place_Model->get_place();
       $this->load->view('place_cat/restaurants',$data);
   }

    public function P_Restaurants2($da)
    {
        $this->load->model('Place_Model');
        $data['respond']=$this->Place_Model->get_review($da);
        $data['respond2']=$this->Place_Model->get_review_des($da);
        $this->load->view('place_details',$data);

    }
}