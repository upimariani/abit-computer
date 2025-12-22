<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPesananSaya extends CI_Model
{
	public function transaksi($id_pelanggan)
	{
		return $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan='" . $id_pelanggan . "' ORDER BY tgl_transaksi DESC")->result();
	}
	public function detail_pesanan($id_transaksi)
	{
		$data['komputer'] = $this->db->query("SELECT * FROM `transaksi` JOIN detail_transaksi ON transaksi.id_transaksi=detail_transaksi.id_transaksi JOIN komputer ON komputer.id_komputer=detail_transaksi.id_komputer WHERE transaksi.id_transaksi='" . $id_transaksi . "'")->result();
		$data['pelanggan'] = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE id_transaksi='" . $id_transaksi . "'")->row();
		return $data;
	}
}

/* End of file mPesananSaya.php */
