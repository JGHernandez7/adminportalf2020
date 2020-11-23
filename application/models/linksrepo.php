<?php
  class Linksrepo extends CI_Model
  {
  	function getdatabyrole($role)
  	{
      $data = array('role' => $role);
  		return $this->db->get_where('links', $data)->result();
  	}
  }
