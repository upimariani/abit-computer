</div>
</div>
<script src="<?= base_url('asset/chart/js_chart.js') ?>"></script>
<link href="https://cdn.datatables.net/2.0.5/css/dataTables.tailwindcss.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<!-- <script src="https://cdn.tailwindcss.com/"></script> -->
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.tailwindcss.js"></script>
<!-- <script src="https://cdn.tailwindcss.com/"></script> -->
<script>
	new DataTable('#myTable');
</script>
<script>
	<?php
	$transaksi = $this->db->query("SELECT SUM(total_transaksi) as jml, tgl_transaksi FROM `transaksi` GROUP BY tgl_transaksi DESC limit 20")->result();
	foreach ($transaksi as $key => $value) {
		$tanggal[] = $value->tgl_transaksi;
		$jml[] = $value->jml;
	}


	?>
	var ctx = document.getElementById('transaksi');
	var grafik = new Chart(ctx, {
		type: 'line',
		data: {
			labels: <?= json_encode($tanggal) ?>,
			datasets: [{
				label: 'Jumlah Pendapatan Transaksi Per Hari',
				data: <?= json_encode($jml) ?>,
				backgroundColor: 'rgb(70,130,180)',
				borderColor: 'rgba(127, 111, 134, 0.5)',
				color: '#666',
				fill: false,
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>
<script>
	<?php
	$pelanggan = $this->db->query("SELECT COUNT(id_pelanggan) as jml, level_member FROM `pelanggan` GROUP BY level_member")->result();
	foreach ($pelanggan as $key => $value) {
		if ($value->level_member == '1') {
			$lev = 'Bronze';
		} else if ($value->level_member == '2') {
			$lev = 'Silver';
		} else if ($value->level_member == '3') {
			$lev = 'Gold';
		} else {
			$lev = 'Platinum';
		}
		$dt_pelanggan[] = $value->jml;
		$member[] = $lev;
	}


	?>
	var ctx = document.getElementById('pelanggan');
	var grafik = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: <?= json_encode($member) ?>,
			datasets: [{
				label: 'Level Member Pelanggan',
				data: <?= json_encode($dt_pelanggan) ?>,
				backgroundColor: [
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
				],
				borderColor: [
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
				],
				color: '#666',
				fill: false,
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>

</body>

</html>
