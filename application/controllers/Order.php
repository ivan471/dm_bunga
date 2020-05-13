<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_data');
	}
	public function index(){
		$data['order'] = $this->model_data->get_order();
		$this->load->template('order/index', $data);
	}
	public function add(){
		$data['bunga'] = $this->model_data->get_all();
		$this->load->template('order/add', $data);
	}
	public function edit($id){
		$data['bunga'] = $this->model_data->get_item($id);
		$this->load->template('order/edit', $data);
	}
	public function add_item(){
		$this->model_data->add_item();
		redirect('/order');
	}
	public function delete($id){
		$this->model_data->delete_item($id);
		redirect('/order');
	}
	public function cancel(){
		$this->model_data->cancel();
		redirect('/order');
	}
}
