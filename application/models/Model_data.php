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
	public function total_order(){
		$query = $this->db->query("SELECT SUM(total) FROM tb_sementara");
		return $query->row_array();
	}
	public function get_item($id){
		$query = $this->db->query("SELECT * FROM tb_sementara where id='".$id."'");
		return $query->row_array();
	}
	public function edit_item(){
		$jumlah = $this->input->post('jumlah');
		$harga = $this->input->post('harga');
		$total = $jumlah * $harga;
		$data = array('jumlah' => $jumlah , 'total' =>$total);
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tb_sementara' , $data);
	}
	public function delete_item($id){
		$this->db->delete('tb_sementara', array('id' => $id));
	}
	public function cancel(){
		$this->db->empty_table('tb_sementara');
	}
	public function add_item(){
		$jumlah = $this->input->post('jumlah');
		$harga = $this->input->post('harga');
		$total = $jumlah * $harga;
		$data=[
			'id' => $this->input->post('id'),
			'nama' => $this->input->post('nama'),
			'harga' => $harga,
			'jumlah' => $jumlah,
			'total' => $total
		];
		$this->db->insert('tb_sementara', $data);
	}
}
