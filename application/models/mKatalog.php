<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mKatalog extends CI_Model
{
	public function kategori()
	{
		return $this->db->query("SELECT * FROM `kategori`")->result();
	}
	public function produk()
	{
		return $this->db->query("SELECT * FROM `komputer` JOIN kategori ON komputer.id_kategori=kategori.id_kategori")->result();
	}
	public function detail_produk($id)
	{
		return $this->db->query("SELECT * FROM `komputer` JOIN kategori ON komputer.id_kategori=kategori.id_kategori WHERE id_komputer='" . $id . "'")->row();
	}
}

/* End of file mKatalog.php */
