<?php


class Edit_User_Model extends CI_Model
{
  public function edit_user($id)
  {

      $this->db->where('id', $id);
      $this->db->update('user', );
  }
}