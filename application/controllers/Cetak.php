<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('model_data');
	}
	public function index(){
		$pdf = new FPDF('p','mm','A4');
		// membuat halaman baru
		$pdf->AddPage();
		// setting jenis font yang akan digunakan
		$pdf->SetFont('Arial','B',16);
		$data = $this->db->query("SELECT * FROM tb_sementara");
		$query = $data->result_array();
		$pdf->Cell(190,7,'List Bunga',0,1,'C');
		$pdf->SetFont('Arial','B',12);
		$pdf->Ln(4);
		$pdf->SetLeftMargin(28);
		$pdf->SetRightMargin(28);
		$pdf->cell(33,8,'No',1,0);
		$pdf->cell(44,8,'Nama',1,0);
		$pdf->cell(35,8,'Harga',1,0);
		$pdf->cell(30,8,'Jumlah',1,0);
		$pdf->cell(40,8,'Total',1,1);
		$i='1';
		$total='0';
		$total1='0';
		$ttl='0	';
		foreach ($query as $data) {
			$ttl =$total1;
			$pdf->cell(10,8,$i,1,0);
			$pdf->cell(60,8,$data['nama'],1,0);
			$pdf->cell(25,8,'Rp.'.number_format($data['harga'], 0, ".", "."),1,0);
			$pdf->cell(25,8,$data['jumlah'],1,0);
			$total=$data['jumlah']*$data['harga'];
			$pdf->cell(30,8,'Rp.'.number_format($total, 0, ".", "."),1,1,'R');
			$total1=($ttl + $total);
			$i++;
		}
		$pdf->cell(120,8,'Sub total',1,0,'R');
		$pdf->cell(30,8,'Rp.'.number_format($total1, 0, ".", "."),1,1,'R');
		$pdf->Output('List Bunga.pdf','D');
	}
}
