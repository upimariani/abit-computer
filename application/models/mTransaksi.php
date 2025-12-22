<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mTransaksi extends CI_Model
{
	public function transaksi()
	{
		$data['belum_bayar'] = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE stat_transaksi='0'")->result();
		$data['konfirmasi'] = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE stat_transaksi='1'")->result();
		$data['proses'] = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE stat_transaksi='2'")->result();
		$data['kirim'] = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE stat_transaksi='3'")->result();
		$data['selesai'] = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE stat_transaksi='4' GROUP BY tgl_transaksi DESC")->result();
		return $data;
	}
}

/* End of file mTransaksi.php */
