<?php


class Location_Model extends CI_Model
{
  public function get_location()
  {
    $query = $this->db->get('place_details');
    return $query->result();
  }
}