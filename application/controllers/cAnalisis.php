<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}

	public function index()
	{

		$data = $this->mAnalisis->getData();
		$k = 4;
		$maxIterasi = 100;
		$iterasi = 0;

		$centroids = $this->mAnalisis->randomCentroid($k);

		do {
			$clusters = array_fill(0, $k, []);
			$oldCentroids = $centroids;

			// 1️⃣ Hitung jarak & tentukan cluster
			foreach ($data as $row) {
				$distances = [];

				foreach ($centroids as $i => $centroid) {
					$distances[$i] = sqrt(
						pow($row->recency - $centroid->recency, 2) +
							pow($row->frequency - $centroid->frequency, 2) +
							pow($row->monetary - $centroid->monetary, 2)
					);
				}

				$clusterIndex = array_keys($distances, min($distances))[0];
				$clusters[$clusterIndex][] = $row;
			}

			// 2️⃣ Update centroid
			foreach ($clusters as $i => $cluster) {
				if (count($cluster) > 0) {
					$sumR = $sumF = $sumM = 0;

					foreach ($cluster as $item) {
						$sumR += $item->recency;
						$sumF += $item->frequency;
						$sumM += $item->monetary;
					}

					$centroids[$i]->recency   = $sumR / count($cluster);
					$centroids[$i]->frequency = $sumF / count($cluster);
					$centroids[$i]->monetary  = $sumM / count($cluster);
				}
			}

			$iterasi++;

			// 3️⃣ Cek konvergensi
			$berubah = false;
			for ($i = 0; $i < $k; $i++) {
				if (
					abs($centroids[$i]->recency - $oldCentroids[$i]->recency) > 0.0001 ||
					abs($centroids[$i]->frequency - $oldCentroids[$i]->frequency) > 0.0001 ||
					abs($centroids[$i]->monetary - $oldCentroids[$i]->monetary) > 0.0001
				) {
					$berubah = true;
					break;
				}
			}
		} while ($berubah && $iterasi < $maxIterasi);

		foreach ($clusters as $a => $cluster) {
			foreach ($cluster as $key => $row) {

				// echo $a + 1;
				$data = array(
					'level_member' => $a + 1
				);
				$this->db->where('id_pelanggan', $row->id_pelanggan);
				$this->db->update('pelanggan', $data);
			}
		}
		$this->session->set_flashdata('success', 'Anda berhasil melakukan transaksi!');
		redirect('Pelanggan/cPesananSaya');
	}
	public function variabel()
	{
		$dt_pelanggan = $this->db->query("SELECT * FROM `pelanggan`")->result();
		foreach ($dt_pelanggan as $key => $value) {
			//menentukan variabel
			$dt = $this->db->query("SELECT COUNT(id_transaksi) as frequency, SUM(total_transaksi) as monetary FROM transaksi JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan='" . $value->id_pelanggan . "'")->row();


			$date = date('Y-m-d');
			$dt_recency = $this->db->query("SELECT DATEDIFF('" . $date . "', tgl_transaksi) AS selisih_hari FROM transaksi JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan='" . $value->id_pelanggan . "' GROUP BY tgl_transaksi DESC LIMIT 1")->row();

			$data = array(
				'recency' => $dt_recency->selisih_hari,
				'frequency' => $dt->frequency,
				'monetary' => $dt->monetary
			);
			$this->db->where('id_pelanggan', $value->id_pelanggan);
			$this->db->update('pelanggan', $data);
		}
		redirect('cAnalisis');
	}
}

/* End of file cAnalisis.php */
