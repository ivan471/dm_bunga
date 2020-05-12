<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_data');
	}
	public function index()
	{
		$data['order'] = $this->model_data->get_order();
		$this->load->template('order/index', $data);
	}
	public function add()
	{
		$data['bunga'] = $this->model_data->get_all();
		$this->load->template('bunga/add', $data);
	}
	public function edit()
	{
		$this->load->template('bunga/edit');
	}
	public function delete()
	{

	}
	public function cancel()
	{

	}
}
