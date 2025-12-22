<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProduk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mProduk');
		$this->load->model('mKategori');
	}

	public function index()
	{
		$data = array(
			'kategori' => $this->mKategori->select(),
			'produk' => $this->mProduk->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Produk/vProduk', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('kategori', 'Kategori Produk', 'required');
		$this->form_validation->set_rules('merk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('stok', 'Stok', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'kategori' => $this->mKategori->select(),
				'produk' => $this->mProduk->select()
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/Layouts/header');
			$this->load->view('Admin/Produk/vTambahProduk', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$config['upload_path']          = './asset/foto-produk';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$data = array(
					'kategori' => $this->mKategori->select()
				);
				$this->load->view('Admin/Layouts/head');
				$this->load->view('Admin/Layouts/aside');
				$this->load->view('Admin/Layouts/header');
				$this->load->view('Admin/Produk/vTambahProduk', $data);
				$this->load->view('Admin/Layouts/footer');
			} else {
				$upload_data = $this->upload->data();
				$data = array(
					'id_kategori' => $this->input->post('kategori'),
					'id_pengguna' => '1',
					'merk' => $this->input->post('merk'),
					'deskripsi' => $this->input->post('deskripsi'),
					'keterangan' => $this->input->post('keterangan'),
					'harga' => $this->input->post('harga'),
					'stok' => $this->input->post('stok'),
					'foto' => $upload_data['file_name']
				);
				$this->mProduk->insert($data);
				$this->session->set_flashdata('success', 'Data Produk Berhasil Ditambahkan!');
				redirect('Admin/cProduk');
			}
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('kategori', 'Kategori Produk', 'required');
		$this->form_validation->set_rules('merk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('stok', 'Stok', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']          = './asset/foto-produk';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {

				$data = array(
					'kategori' => $this->mKategori->select(),
					'error' => $this->upload->display_errors(),
					'produk' => $this->mProduk->edit($id)
				);
				$this->load->view('Admin/Layouts/head');
				$this->load->view('Admin/Layouts/aside');
				$this->load->view('Admin/Layouts/header');
				$this->load->view('Admin/Produk/vUpdateProduk', $data);
				$this->load->view('Admin/Layouts/footer');
			} else {

				$upload_data =  $this->upload->data();
				$data = array(
					'id_kategori' => $this->input->post('kategori'),
					'id_pengguna' => '1',
					'merk' => $this->input->post('merk'),
					'deskripsi' => $this->input->post('deskripsi'),
					'keterangan' => $this->input->post('keterangan'),
					'harga' => $this->input->post('harga'),
					'stok' => $this->input->post('stok'),
					'foto' => $upload_data['file_name']
				);
				$this->mProduk->update($id, $data);
				$this->session->set_flashdata('success', 'Data Produk Berhasil Diperbaharui !!!');
				redirect('Admin/cProduk');
			} //tanpa ganti gambar
			$data = array(
				'id_kategori' => $this->input->post('kategori'),
				'id_pengguna' => '1',
				'merk' => $this->input->post('merk'),
				'deskripsi' => $this->input->post('deskripsi'),
				'keterangan' => $this->input->post('keterangan'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok')
			);
			$this->mProduk->update($id, $data);
			$this->session->set_flashdata('success', 'Data Produk Berhasil Diperbaharui !!!');
			redirect('Admin/cProduk');
		}
		$data = array(
			'kategori' => $this->mKategori->select(),
			'produk' => $this->mProduk->edit($id)
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Produk/vUpdateProduk', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function delete($id)
	{
		$this->mProduk->delete($id);
		$this->session->set_flashdata('success', 'Data Produk Berhasil Dihapus!');
		redirect('Admin/cProduk');
	}
}

/* End of file cProduk.php */
