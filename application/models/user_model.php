<?php

  class User_model extends CI_Model
  {

    public function __construct()
    {
      parent::__construct();
    }
    public function getData(){
      $query = $this->db->get('member');
      return $query->result();
    }
  }


 ?>
