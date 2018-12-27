<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$data['title'] = 'Admin Olshop';
		$this->load->view('admin/admin_templates/header', $data);
		$this->load->view('admin/index');
		$this->load->view('admin/admin_templates/footer');
	}

	public function barang()
	{
		$data['datas'] = $this->Admin_model->get_barang();
		$data['title'] = 'Barang';
		
		$this->load->view('admin/admin_templates/header', $data);
		$this->load->view('admin/barang', $data);
		$this->load->view('admin/admin_templates/footer');
	}

	public function pelanggan(){
        $data['datas'] = $this->Admin_model->get_pelanggan();
        $data['title'] = 'Data Pelanggan';
        
        $this->load->view('admin/admin_templates/header', $data);
        $this->load->view('admin/pelanggan',$data);
        $this->load->view('admin/admin_templates/footer');
    }

}