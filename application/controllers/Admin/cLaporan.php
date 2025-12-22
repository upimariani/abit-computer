<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporan extends CI_Controller
{

	public function index()
	{
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();


		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$pdf->SetFont('Times', 'B', 14);
		// $pdf->Image('asset/logo-badai.png', 10, 3, 28);
		$pdf->Cell(200, 5, 'ABIT COMPUTER', 0, 1, 'C');
		$pdf->SetFont('Times', '', 10);
		$pdf->Cell(200, 20, 'Jl. Kigedeng Luragung, Desa Pasayangan, Kecamatan Lebakwangi Kuningan', 0, 0, 'C');

		$pdf->SetLineWidth(1);
		$pdf->Line(10, 43, 200, 43);
		$pdf->SetLineWidth(0);
		$pdf->Line(10, 42, 200, 42);
		$pdf->Cell(10, 30, '', 0, 1);


		$pdf->SetFont('Times', 'B', 14);
		$pdf->Cell(190, 10, 'LAPORAN TRANSAKSI PELANGGAN', 0, 1, 'C');
		$pdf->SetFont('Times', '', 12);
		$pdf->SetFont('Times', '', 10);


		$pdf->Cell(10, 10, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'No', 1, 0, 'C');
		$pdf->Cell(30, 7, 'Tanggal Transaksi', 1, 0, 'C');
		$pdf->Cell(55, 7, 'Nama Pelanggan', 1, 0, 'C');
		$pdf->Cell(45, 7, 'Level Member', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Total Transaksi', 1, 1, 'C');

		$pdf->SetFont('Times', '', 9);
		$no = 1;

		$data = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE stat_transaksi='4' AND MONTH(tgl_transaksi)='" . $bulan . "' AND YEAR(tgl_transaksi)='" . $tahun . "'")->result();
		$total = 0;
		foreach ($data as $key => $value) {
			if ($value->level_member == '1') {
				$lev = 'Bronze';
			} else if ($value->level_member == '2') {
				$lev = 'Silver';
			} else if ($value->level_member == '3') {
				$lev = 'Gold';
			} else {
				$lev = 'Platinum';
			}

			$total += $value->total_transaksi;
			$pdf->Cell(10, 7, $no++, 1, 0, 'C');
			$pdf->Cell(30, 7, $value->tgl_transaksi, 1, 0, 'L');
			$pdf->Cell(55, 7, $value->nama_pelanggan, 1, 0, 'L');
			$pdf->Cell(45, 7, $lev, 1, 0, 'C');
			$pdf->Cell(40, 7, 'Rp.' . number_format($value->total_transaksi), 1, 1, 'C');
		}

		$pdf->Cell(10, 5, '', 0, 1);
		$pdf->SetFont('Times', 'B', 12);
		$pdf->Cell(10, 7, '', 0, 0, 'C');
		$pdf->Cell(45, 7, '', 0, 0, 'C');
		$pdf->Cell(55, 7, '', 0, 0, 'C');
		$pdf->Cell(30, 7, 'Total Pendapatan', 0, 0, 'C');
		$pdf->Cell(40, 7, 'Rp.' . number_format($total), 0, 1, 'C');


		$pdf->SetFont('Times', '', 9);
		$pdf->Cell(40, 7, '', 0, 1, 'C');
		$pdf->Cell(40, 7, '', 0, 1, 'C');


		$pdf->Cell(95, 7, 'Mengetahui,', 0, 0, 'C');
		$pdf->Cell(95, 7, 'Kuningan, ' . date('j F Y'), 0, 1, 'C');
		$pdf->Cell(95, 7, 'Manajer', 0, 0, 'C');
		$pdf->Cell(95, 7, 'Admin', 0, 1, 'C');
		$pdf->Cell(95, 10, '', 0, 1, 'C');

		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(95, 7, '(.........................)', 0, 0, 'C');
		$pdf->Cell(95, 7, '(.........................)', 0, 0, 'C');
		$pdf->Output();
	}
}

/* End of file cLaporan.php */
