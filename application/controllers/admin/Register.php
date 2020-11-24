<?php
class Register extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin');
	}

	function add()
	{
		$this->load->view('admin/register');	
	}

	function save()
	{
		$check = $this->Admin->check();

		if($this->input->post('password') != $this->input->post('password_c') || $this->input->post('password') == $this->input->post('NULL'))
		{
			$this->session->set_flashdata('error', 'Password did not match!');
			redirect('admin');
		}

		else
		{
			if(!$check)
			{
				$this->Admin->save();
				$this->session->set_flashdata('success', 'You are now registered!');
				redirect('admin');
			}
			else
			{
				$this->session->set_flashdata('failure', 'Admin already exists!');
				redirect('admin');
			}
		}
	}
}