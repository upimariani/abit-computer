<h3>Hasil Clustering K-Means</h3>
<p>Jumlah Iterasi: <?= $iterasi ?></p>

<?php foreach ($clusters as $i => $cluster) : ?>
	<h4>Cluster <?= $i + 1 ?></h4>
	<ul>
		<?php foreach ($cluster as $row) : ?>
			<li>ID Pelanggan: <?= $row->id_pelanggan ?></li>
		<?php endforeach; ?>
	</ul>
<?php endforeach; ?>
