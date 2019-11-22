<?php


class Place_Model extends CI_Model
{
   public function get_place()
   {
       $query = $this->db->get('place_details');
       return $query->result();
   }

   public function get_review($id)
   {
       $this->db->where('place_id',$id);
       $respond = $this->db->get('place_details');
       return $respond->result_array();
   }

   public function get_review_des($id_des)
   {
       $this->db-where('business_place_id',$id_des);
       $respond2 = $this->db->get('feedback_details');
       return $respond2->result();
   }
}