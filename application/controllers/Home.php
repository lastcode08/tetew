<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Homepage';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar');
		$this->load->view('home');
		$this->load->view('templates/footer');
	}
}