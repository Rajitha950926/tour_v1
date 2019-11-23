<?php


class Location_Model extends CI_Model
{
  public function get_location()
  {
    $query = $this->db->get('place_details');
    return $query->result();
  }

  public function get_location_des($id)
  {
      $this->db->where('place_id',$id);
      $respond = $this->db->get('place_details');
      return $respond->result_array();
  }
}