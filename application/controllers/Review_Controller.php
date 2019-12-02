<?php


class Review_Controller extends CI_Controller
{
   public function review_submit()
   {
       
       $this->load->model('Review');
       $this->Register_Model->submit_review();
   }
}