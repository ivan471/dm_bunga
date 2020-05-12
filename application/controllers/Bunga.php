<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bunga extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_data');
	}
	public function index()
	{
		$data['bunga'] = $this->model_data->get_all();
		$this->load->template('bunga/index', $data);
	}
	public function add()
	{
		$this->load->template('bunga/add');
	}
	public function edit()
	{
		$this->load->template('bunga/edit');
	}
}
