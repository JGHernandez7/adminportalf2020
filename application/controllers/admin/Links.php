<?php
class Links extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
			redirect('admin');
	}

	function index()
    {
    	$this->load->model('Link');
    	$data['links'] = $this->Link->getAll();
    	$this->load->view('admin/links', $data);
    }
}