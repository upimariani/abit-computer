<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTriger extends CI_Controller
{

	public function index()
	{
		$dt = $this->db->query("SELECT pelanggan.id_pelanggan as id, transaksi.id_pelanggan as tran FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.nama_pelanggan")->result();
		foreach ($dt as $key => $value) {
			$data = array(
				'id_pelanggan' => $value->id
			);
			$this->db->where('id_pelanggan', $value->tran);
			$this->db->update('transaksi', $data);
		}
	}
	public function detail_transaksi()
	{
		$dt = $this->db->query("SELECT komputer.id_komputer as id, id_detail FROM `detail_transaksi` JOIN komputer ON detail_transaksi.id_komputer=komputer.merk")->result();

		foreach ($dt as $key => $value) {
			$data = array(
				'id_komputer' => $value->id
			);
			$this->db->where('id_detail', $value->id_detail);
			$this->db->update('detail_transaksi', $data);
		}
	}
}

/* End of file cTriger.php */
