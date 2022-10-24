<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('TampilModel', 'model');
	}

	public function index()
	{
	}

	public function resmi($kode)
	{
		$data['srt'] = $this->model->ambil($kode)->row();
		$this->load->view('tampil', $data);
	}
}