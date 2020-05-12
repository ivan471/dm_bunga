<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_data');
	}
	public function index()
	{
		$data['bunga'] = $this->model_data->get_all();
		$this->load->template('index', $data);
	}
}
