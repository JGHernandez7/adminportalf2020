<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('admin'))
			redirect('admin/dashboard');
	}

	function index()
	{
		$this->load->view('admin/login');
	}

	function verify()
	{
		//username: support password: support
		$this->load->model('admin');
		$check = $this->admin->validate();
		if($check)
		{
			$userData = json_decode(json_encode($check), true);
			$session_data = array(
				'admin' => '1',
				'name' => $userData["name"],
				'username' => $userData['username'],
				'role' => $userData['role']
			);
			$this->session->set_userdata($session_data);
			redirect('admin/dashboard');
		}
		else
		{
			redirect('admin');
		}
	}
}
