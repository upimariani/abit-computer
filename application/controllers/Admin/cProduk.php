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
			$config['upload_path']   = './asset/foto-produk/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']      = 500000;
			$config['encrypt_name']  = TRUE;

			$this->load->library('upload', $config);

			$files = $_FILES['gambar'];
			$jumlah_file = count($files['name']);
			$foto = array();

			for ($i = 0; $i < $jumlah_file; $i++) {

				if ($files['name'][$i] == '') continue;

				$_FILES['file']['name']     = $files['name'][$i];
				$_FILES['file']['type']     = $files['type'][$i];
				$_FILES['file']['tmp_name'] = $files['tmp_name'][$i];
				$_FILES['file']['error']    = $files['error'][$i];
				$_FILES['file']['size']     = $files['size'][$i];

				if ($this->upload->do_upload('file')) {
					$upload_data = $this->upload->data();
					$foto[] = $upload_data['file_name'];
				} else {
					// kalau error upload
					$data = array(
						'kategori' => $this->mKategori->select(),
						'error' => $this->upload->display_errors()
					);
					$this->load->view('Admin/Layouts/head');
					$this->load->view('Admin/Layouts/aside');
					$this->load->view('Admin/Layouts/header');
					$this->load->view('Admin/Produk/vTambahProduk', $data);
					$this->load->view('Admin/Layouts/footer');
					return; // stop proses
				}
			}

			# ✅ kalau semua upload berhasil
			$data = array(
				'id_kategori' => $this->input->post('kategori'),
				'merk' => $this->input->post('merk'),
				'deskripsi' => $this->input->post('deskripsi'),
				'keterangan' => $this->input->post('keterangan'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),
				'foto' => implode(',', $foto)
			);

			$this->mProduk->insert($data);
			$this->session->set_flashdata('success', 'Data Produk Berhasil Ditambahkan!');
			redirect('Admin/cProduk');
		}
	}
	public function edit($id)
	{
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
	public function update($id)
	{
		$produk = $this->mProduk->edit($id);

		$config['upload_path']   = './asset/foto-produk/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']      = 500000;
		$config['encrypt_name']  = TRUE;

		$this->load->library('upload', $config);

		// ✅ AMAN DARI ERROR
		$files = $_FILES['gambar'] ?? null;
		$jumlah_file = (!empty($files) && isset($files['name']) && is_array($files['name']))
			? count($files['name'])
			: 0;

		$foto = array();

		// 🔍 CEK ADA GAMBAR BARU ATAU TIDAK
		if ($jumlah_file > 0 && $files['name'][0] != '') {

			// ❗ HAPUS GAMBAR LAMA
			if (!empty($produk->foto)) {
				$gambar_lama = explode(',', $produk->foto);
				foreach ($gambar_lama as $g) {
					$path = './asset/foto-produk/' . $g;
					if (file_exists($path)) {
						unlink($path);
					}
				}
			}

			// 🔁 UPLOAD GAMBAR BARU
			for ($i = 0; $i < $jumlah_file; $i++) {

				if ($files['name'][$i] == '') continue;

				$_FILES['file']['name']     = $files['name'][$i];
				$_FILES['file']['type']     = $files['type'][$i];
				$_FILES['file']['tmp_name'] = $files['tmp_name'][$i];
				$_FILES['file']['error']    = $files['error'][$i];
				$_FILES['file']['size']     = $files['size'][$i];

				$this->upload->initialize($config);

				if ($this->upload->do_upload('file')) {
					$upload_data = $this->upload->data();
					$foto[] = $upload_data['file_name'];
				} else {
					$this->session->set_flashdata('error', $this->upload->display_errors());
					redirect('Admin/cProduk/edit/' . $id);
					return;
				}
			}

			$foto_simpan = implode(',', $foto);
		} else {
			// ✅ TIDAK UPLOAD → PAKAI FOTO LAMA
			$foto_simpan = $produk->foto;
		}

		// 💾 UPDATE DATA
		$data = array(
			// 'id_produk'   => $id,
			'id_kategori' => $this->input->post('kategori'),
			'merk'        => $this->input->post('merk'),
			'deskripsi'   => $this->input->post('deskripsi'),
			'keterangan'  => $this->input->post('keterangan'),
			'harga'       => $this->input->post('harga'),
			'stok'        => $this->input->post('stok'),
			'foto'        => $foto_simpan
		);

		$this->mProduk->update($id, $data);

		$this->session->set_flashdata('success', 'Data Produk Berhasil Diupdate!');
		redirect('Admin/cProduk');
	}
	public function delete($id)
	{
		$this->mProduk->delete($id);
		$this->session->set_flashdata('success', 'Data Produk Berhasil Dihapus!');
		redirect('Admin/cProduk');
	}
}

/* End of file cProduk.php */
