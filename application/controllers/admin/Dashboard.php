<?php
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
			redirect('admin');
	}

	function index()
	{
		if($this->session->userdata('username') != ''){
			$this->load->model("linksrepo");
			$data["links"] = $this->linksrepo->getdatabyrole($this->session->userdata('role'));
			$data["role"] = $this->session->userdata('role');
			$data["name"] = $this->session->userdata('name');
			$this->load->view('admin/dashboard', $data);
		}else{
		//	redirect(base_url() . 'admin/login');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
}
