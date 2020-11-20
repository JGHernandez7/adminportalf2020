<?php
class Link extends CI_Model
{
	function getAll()
	{
		return $this->db->get('links')->result_array();
    }
}