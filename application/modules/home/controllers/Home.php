<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mhome', 'home');
	}

	public function index()
	{
		$data['title'] = 'Selamat Datang';
		$this->load->view('home/index', $data);
	}
}
