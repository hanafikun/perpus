<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(array('nav/Nav_model'));
	}

	public function index()
	{
		$data['navigasi'] = $this->Nav_model->get();
		$data['nav_parent'] = $this->Nav_model->get_have_child();
		$data['name_page'] = 'Home';
		$this->load->view('pages/template/header',$data);
		$this->load->view('pages/template/body');
		$this->load->view('pages/template/footer');
	}
	public function home(){
		$this->load->view('pages/template/body');
	}
	public function page(){
		$this->load->view('pages/template/page');
	}
}
