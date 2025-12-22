<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb__text">
					<h4>Pesanan Saya</h4>
					<div class="breadcrumb__links">
						<a href="./index.html">Home</a>
						<a href="./shop.html">Shop</a>
						<span>Pesanan Saya</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Breadcrumb Section End -->

<!-- Pesanan Saya Section Begin -->
<section class="shopping-cart spad">
	<div class="container">
		<div class="row">

			<div class="col-lg-12">
				<?php
				if ($this->session->userdata('success') != '') {
				?>
					<div class="alert alert-success" role="alert">
						<?= $this->session->userdata('success') ?>
					</div>
				<?php
				}
				?>
				<div class="card">
					<div class="card-body">
						<div class="invoice-title">
							<h4 class="float-end font-size-15">Invoice #<?= $detail['pelanggan']->id_transaksi ?> <span class="badge bg-success font-size-12 ms-2"><?php if ($detail['pelanggan']->stat_transaksi == '0') {
																																									?>
										Belum Bayar
									<?php
																																									} else if ($detail['pelanggan']->stat_transaksi == '1') {
									?>
										Menunggu Konfirmasi
									<?php
																																									} else if ($detail['pelanggan']->stat_transaksi == '2') {
									?>
										Pesanan Diproses
									<?php
																																									} else if ($detail['pelanggan']->stat_transaksi == '3') {
									?>
										Pesanan Dikirim
									<?php
																																									} else if ($detail['pelanggan']->stat_transaksi == '4') {
									?>
										Pesanan Selesai
									<?php
																																									} ?></span></h4>
							<div class="mb-4">
								<h2 class="mb-1 text-muted">Abit Computer</h2>
							</div>
							<div class="text-muted">
								<p class="mb-1">Jl. Kigedeng
									Luragung, Desa Pasayangan, Kecamatan Lebakwangi</p>
								<p class="mb-1"><i class="uil uil-envelope-alt me-1"></i> Kabupaten Kuningan</p>
								<p><i class="uil uil-phone me-1"></i> Jawa Barat</p>
							</div>
						</div>

						<hr class="my-4">

						<div class="row">
							<div class="col-sm-6">
								<div class="text-muted">
									<h5 class="font-size-16 mb-3">Billed To:</h5>
									<h5 class="font-size-15 mb-2"><?= $detail['pelanggan']->nama_pelanggan ?>r</h5>
									<p class="mb-1"><?= $detail['pelanggan']->alamat ?></p>
									<p class="mb-1"><?= $detail['pelanggan']->pengiriman ?></p>
									<p><?= $detail['pelanggan']->no_hp ?></p>
								</div>
							</div>
							<!-- end col -->
							<div class="col-sm-6">
								<div class="text-muted text-sm-end">
									<div>
										<h5 class="font-size-15 mb-1">Invoice No:</h5>
										<p>#<?= $detail['pelanggan']->id_transaksi ?></p>
									</div>
									<div class="mt-4">
										<h5 class="font-size-15 mb-1">Invoice Date:</h5>
										<p><?= $detail['pelanggan']->tgl_transaksi ?></p>
									</div>

								</div>
							</div>
							<!-- end col -->
						</div>
						<!-- end row -->

						<div class="py-2">
							<h5 class="font-size-15">Order Summary</h5>

							<div class="table-responsive">
								<table class="table align-middle table-nowrap table-centered mb-0">
									<thead>
										<tr>
											<th style="width: 70px;">No.</th>
											<th>Item</th>
											<th>Price</th>
											<th>Quantity</th>
											<th class="text-end" style="width: 180px;">Total</th>
										</tr>
									</thead><!-- end thead -->
									<tbody>
										<?php
										$no = 1;
										foreach ($detail['komputer'] as $key => $value) {
										?>
											<tr>
												<th scope="row"><?= $no++ ?></th>
												<td>
													<div>
														<h5 class="text-truncate font-size-14 mb-1"><?= $value->merk ?></h5>
													</div>
												</td>
												<td>Rp. <?= number_format($value->harga) ?></td>
												<td><?= $value->qty ?> x</td>
												<td class="text-end">Rp. <?= number_format($value->harga * $value->qty) ?></td>
											</tr>
										<?php
										}
										?>

										<!-- end tr -->
										<tr>
											<th scope="row" colspan="4" class="border-0 text-end">
												Ongkos Kirim :</th>
											<td class="border-0 text-end">Rp. <?= number_format($value->ongkir) ?></td>
										</tr>

										<tr>
											<th scope="row" colspan="4" class="border-0 text-end">Total</th>
											<td class="border-0 text-end">
												<h5 class="m-0 fw-semibold">Rp. <?= number_format($value->total_transaksi) ?></h5>
											</td>
										</tr>


									</tbody><!-- end tbody -->
								</table><!-- end table -->
								<?php
								if ($detail['pelanggan']->stat_transaksi == '0') {
								?>
									<hr>
									<form id="payment-form" method="post" action="<?= site_url() ?>/snap/finish">
										<input type="hidden" name="result_type" id="result-type" value="">
										<input type="hidden" name="result_data" id="result-data" value="">
									</form>
									<button class="btn btn-danger" id="pay-button">Bayar!</button>
								<?php
								}
								?>


							</div><!-- end table responsive -->
							<div class="d-print-none mt-4">
								<div class="float-end">
									<a href="javascript:window.print()" class="btn btn-success me-1"><i class="fa fa-print"></i></a>
									<a href="<?= base_url('Pelanggan/cPesananSaya') ?>" class="btn btn-danger w-md">Kembali</a>
									<?php
									if ($detail['pelanggan']->stat_transaksi == '3') {
									?>
										<a href="<?= base_url('Pelanggan/cPesananSaya/diterima/' . $detail['pelanggan']->id_transaksi) ?>" class="btn btn-warning w-md">Pesanan Diterima</a>

									<?php
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- end col -->
		</div>

	</div>
</section>
<!-- Pesanan Saya Section End -->
<script type=" text/javascript">
	$('#pay-button').click(function(event) {
		event.preventDefault();
		$(this).attr("disabled", "disabled");

		$.ajax({
			url: '<?= site_url() ?>/snap/token/' + <?= $detail['pelanggan']->id_transaksi ?>,
			cache: false,

			success: function(data) {
				//location = data;

				console.log('token = ' + data);

				var resultType = document.getElementById('result-type');
				var resultData = document.getElementById('result-data');

				function changeResult(type, data) {
					$("#result-type").val(type);
					$("#result-data").val(JSON.stringify(data));
					//resultType.innerHTML = type;
					//resultData.innerHTML = JSON.stringify(data);
				}

				snap.pay(data, {

					onSuccess: function(result) {
						changeResult('success', result);
						console.log(result.status_message);
						console.log(result);
						$("#payment-form").submit();
					},
					onPending: function(result) {
						changeResult('pending', result);
						console.log(result.status_message);
						$("#payment-form").submit();
					},
					onError: function(result) {
						changeResult('error', result);
						console.log(result.status_message);
						$("#payment-form").submit();
					}
				});
			}
		});
	});
</script>
