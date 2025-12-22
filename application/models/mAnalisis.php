<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function getData()
	{
		return $this->db->query("SELECT * FROM `pelanggan`")->result();
	}

	public function randomCentroid($k = 4)
	{
		return $this->db->query("SELECT * FROM `pelanggan` GROUP BY id_pelanggan ASC LIMIT " . $k)->result();
	}
}

/* End of file mAnalisis.php */
