<?php
class Model_data extends CI_Model{
	public function get_all(){
		$query = $this->db->query("SELECT * FROM bunga");
		return $query->result_array();
	}
	public function get_order(){
		$query = $this->db->query("SELECT * FROM tb_sementara");
		return $query->result_array();
	}
}
