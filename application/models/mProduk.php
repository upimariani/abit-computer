<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mProduk extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('komputer', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('komputer');
		$this->db->join('kategori', 'komputer.id_kategori = kategori.id_kategori', 'left');
		return $this->db->get()->result();
	}
	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('komputer');
		$this->db->join('kategori', 'komputer.id_kategori = kategori.id_kategori', 'left');
		$this->db->where('id_komputer', $id);
		return $this->db->get()->row();
	}
	public function update($id_komputer, $data)
	{
		$this->db->where('id_komputer', $id_komputer);
		$this->db->update('komputer', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_komputer', $id);
		$this->db->delete('komputer');
	}
}

/* End of file mkomputer.php */
