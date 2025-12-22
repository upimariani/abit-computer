<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKatalog extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKatalog');
	}

	public function index()
	{
		$data = array(
			'kategori' => $this->mKatalog->kategori(),
			'produk' => $this->mKatalog->produk()
		);
		$this->load->view('Pelanggan/Layouts/head');
		$this->load->view('Pelanggan/Layouts/header');
		$this->load->view('Pelanggan/vKatalog', $data);
		$this->load->view('Pelanggan/Layouts/footer');
	}
	public function detail($id_komputer)
	{
		$data = array(
			'detail' => $this->mKatalog->detail_produk($id_komputer)
		);
		$this->load->view('Pelanggan/Layouts/head');
		$this->load->view('Pelanggan/Layouts/header');
		$this->load->view('Pelanggan/vDetailKatalog', $data);
		$this->load->view('Pelanggan/Layouts/footer');
	}

	//CART----------------------------
	public function add_cart($id_komputer)
	{

		$komputer = $this->db->query("SELECT * FROM `komputer` WHERE id_komputer='" . $id_komputer . "'")->row();

		$data = array(
			'id' => $komputer->id_komputer,
			'name' => $komputer->merk,
			'price' => $komputer->harga,
			'qty' => '1',
			'stok' => $komputer->stok,
			'picture' => $komputer->foto
		);
		$this->cart->insert($data);
		$this->session->set_flashdata('success', 'komputer berhasil dimasukkan ke keranjang!');
		redirect('Pelanggan/cKatalog');
	}
	public function addtocart_detail($id_komputer)
	{
		$komputer = $this->db->query("SELECT * FROM `komputer` WHERE id_komputer='" . $id_komputer . "'")->row();
		$data = array(
			'id' => $komputer->id_komputer,
			'name' => $komputer->merk,
			'price' => $komputer->harga,
			'qty' => $this->input->post('qty'),
			'stok' => $komputer->stok,
			'picture' => $komputer->foto
		);
		$this->cart->insert($data);
		$this->session->set_flashdata('success', 'komputer berhasil dimasukkan ke keranjang!');
		redirect('Pelanggan/cKatalog');
	}
	public function cart()
	{
		$this->load->view('Pelanggan/Layouts/head');
		$this->load->view('Pelanggan/Layouts/header');
		$this->load->view('Pelanggan/vCart');
		$this->load->view('Pelanggan/Layouts/footer');
	}
	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		redirect('Pelanggan/cKatalog/cart');
	}
	public function update_cart()
	{
		$i = 1;
		foreach ($this->cart->contents() as $items) {
			$data = array(
				'rowid'  => $items['rowid'],
				'qty'    => $this->input->post($i . '[qty]')
			);
			$this->cart->update($data);
			$i++;
		}
		redirect('Pelanggan/cKatalog/cart');
	}
}

/* End of file cKatalog.php */
