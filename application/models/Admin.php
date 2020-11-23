<?php
class Admin extends CI_Model
{
	function validate()
	{
		$arr['username'] = $this->input->post('username');
		$arr['password'] = md5($this->input->post('password'));

		return $this->db->get_where('admins', $arr)->row();
	}

	function check()
	{
		$arr['name'] = $this->input->post('name');
		$arr['username'] = $this->input->post('username');
		$arr['password'] = md5($this->input->post('password'));
		$arr['role'] = $this->input->post('role');

		return $this->db->get_where('admins', $arr)->row();
	}

	function save()
	{
		$arr['name'] = $this->input->post('name');
		$arr['username'] = $this->input->post('username');
		$arr['password'] = md5($this->input->post('password'));
		$arr['role'] = $this->input->post('role');

		$this->db->insert('admins', $arr);
	}
}
