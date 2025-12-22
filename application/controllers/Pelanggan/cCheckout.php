<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCheckout extends CI_Controller
{

	public function index()
	{
		$this->load->view('Pelanggan/Layouts/head');
		$this->load->view('Pelanggan/Layouts/header');
		$this->load->view('Pelanggan/vCheckout');
	}
	public function order()
	{

		$data = array(
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),
			'tgl_transaksi' => date('Y-m-d'),
			'total_transaksi' => $this->input->post('total_pembayaran'),
			'ongkir' => $this->input->post('ongkir'),
			'pengiriman' => 'Kota ' . $this->input->post('kota') . ' Prov. ' . $this->input->post('provinsi') . 'Expedisi. ' . $this->input->post('expedisi') . $this->input->post('paket')
		);
		$this->db->insert('transaksi', $data);



		//mengurangi stok komputer
		foreach ($this->cart->contents() as $key => $value) {
			$komputer = $this->db->query("SELECT * FROM `komputer` WHERE id_komputer='" . $value['id'] . "'")->row();
			$ss = $komputer->stok;
			$qty = $value['qty'];
			$st = $ss - $qty;

			$dt_stok = array(
				'stok' => $st
			);
			$this->db->where('id_komputer', $komputer->id_komputer);
			$this->db->update('komputer', $dt_stok);
		}

		//detail komputer
		$id = $this->db->query("SELECT MAX(id_transaksi) as id_transaksi FROM `transaksi`")->row();
		foreach ($this->cart->contents() as $key => $value) {
			$item = array(
				'id_transaksi' => $id->id_transaksi,
				'id_komputer' => $value['id'],
				'qty' => $value['qty']
			);
			$this->db->insert('detail_transaksi', $item);
		}
		$this->cart->destroy();
		redirect('cAnalisis/variabel');
	}
}

/* End of file cCheckout.php */
