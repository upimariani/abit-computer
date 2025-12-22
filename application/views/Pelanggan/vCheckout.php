<?php
$dt_pelanggan = $this->db->query("SELECT * FROM `pelanggan` WHERE id_pelanggan='" . $this->session->userdata('id_pelanggan') . "'")->row();
?>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb__text">
					<h4>Pengiriman</h4>
					<div class="breadcrumb__links">
						<a href="./index.html">Home</a>
						<a href="./shop.html">Belanja</a>
						<span>Pengiriman</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
	<div class="container">
		<div class="checkout__form">
			<form action="<?= base_url('Pelanggan/cCheckout/order') ?>" method="POST">
				<div class="row">
					<div class="col-lg-8 col-md-6">
						<h6 class="checkout__title">Billing Details</h6>
						<div class="row">
							<div class="col-lg-6">
								<div class="checkout__input">
									<p>Nama<span>*</span></p>
									<input value="<?= $dt_pelanggan->nama_pelanggan ?>" type="text" readonly>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="checkout__input">
									<p>Alamat<span>*</span></p>
									<input name="alamat" value="<?= $dt_pelanggan->alamat ?>" type="text" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="checkout__input">
									<p>Provinsi<span>*</span></p>
									<select name="provinsi" class="form-control mb-4" required>

									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="checkout__input">
									<p>Kabupaten/Kota<span>*</span></p>
									<select name="kota" class="form-control mb-4" required>

									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="checkout__input">
									<p>Kecamatan<span>*</span></p>
									<select name="kecamatan" class="form-control mb-4" required>

									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="checkout__input">
									<p>Expedisi<span>*</span></p>
									<select name="expedisi" class="form-control mb-4" required>

									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="checkout__input">
									<p>Paket<span>*</span></p>
									<select name="paket" class="form-control mb-4" required>

									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="checkout__order">
							<h4 class="order__title">Order Pelanggan</h4>
							<div class="checkout__order__products">Total <span>Produk</span></div>
							<ul class="checkout__total__products">
								<?php
								foreach ($this->cart->contents() as $key => $value) {
								?>
									<li><?= $value['qty'] ?> x <?= $value['name'] ?><span>Rp. <?= number_format($value['qty'] * $value['price']) ?></span></li>
								<?php
								}
								?>

							</ul>
							<ul class="checkout__total__all">
								<li>Subtotal <span>Rp. <?= number_format($this->cart->total()) ?></span></li>
								<li>Ongkir <span id="ongkir"></span></li>
								<!-- <li>Diskon (-) <span id="diskon"></span></li> -->
								<li>Total <span class="ttl_bayar"></span></li>
							</ul>
							<button type="submit" class="site-btn">PESAN</button>
						</div>
					</div>
				</div>
				<input type="hidden" name="estimasi">
				<input type="hidden" name="ongkir">
				<input type="hidden" name="total_pembayaran">
			</form>
		</div>
	</div>
</section>


<!-- Js Plugins -->
<script src="<?= base_url('asset/malefashion-master/') ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('asset/malefashion-master/') ?>js/bootstrap.min.js"></script>
<!-- <script src="<?= base_url('asset/malefashion-master/') ?>js/jquery.nice-select.min.js"></script>
	<script src="<?= base_url('asset/malefashion-master/') ?>js/jquery.nicescroll.min.js"></script>
	<script src="<?= base_url('asset/malefashion-master/') ?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url('asset/malefashion-master/') ?>js/jquery.countdown.min.js"></script>
	<script src="<?= base_url('asset/malefashion-master/') ?>js/jquery.slicknav.js"></script>
	<script src="<?= base_url('asset/malefashion-master/') ?>js/mixitup.min.js"></script>
	<script src="<?= base_url('asset/malefashion-master/') ?>js/owl.carousel.min.js"></script> -->
<script src="<?= base_url('asset/malefashion-master/') ?>js/main.js"></script>
<script>
	$(document).ready(function() {
		$.ajax({
			type: "POST",
			url: "http://localhost/abit-komputer/Pelanggan/Ongkir/provinsi",
			success: function(hasil_provinsi) {
				// console.log(hasil_provinsi);
				$("select[name=provinsi]").html(hasil_provinsi);
			}
		});
		$("select[name=provinsi]").on("change", function() {
			var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
			$.ajax({
				type: "POST",
				url: "http://localhost/abit-komputer/Pelanggan/ongkir/kota",
				data: 'id_provinsi=' + id_provinsi_terpilih,
				success: function(hasil_kota) {
					$("select[name=kota]").html(hasil_kota);
				}
			});
		});
		$("select[name=kota]").on("change", function() {
			var id_kota_terpilih = $("option:selected", this).attr("id_kota");
			$.ajax({
				type: "POST",
				url: "http://localhost/abit-komputer/Pelanggan/ongkir/kecamatan",
				data: 'id_kota=' + id_kota_terpilih,
				success: function(hasil_kecamatan) {
					// console.log(hasil_kecamatan);
					$("select[name=kecamatan]").html(hasil_kecamatan);
				}
			});
		});

		$("select[name=kecamatan]").on("change", function() {
			$.ajax({
				type: "POST",
				url: "http://localhost/abit-komputer/Pelanggan/ongkir/expedisi",
				success: function(hasil_expedisi) {
					$("select[name=expedisi]").html(hasil_expedisi);
				}
			});
		});


		$("select[name=expedisi]").on("change", function() {
			//mendapatkan expedisi terpilih
			var expedisi_terpilih = $("select[name=expedisi]").val()

			//mendapatkan id kota tujuan terpilih
			var id_kecamatan_tujuan_terpilih = $("option:selected", "select[name=kecamatan]").attr('id_kecamatan');

			//alert(total_berat);
			$.ajax({
				type: "POST",
				url: "http://localhost/abit-komputer/Pelanggan/ongkir/paket",
				data: 'expedisi=' + expedisi_terpilih + '&id_kecamatan=' + id_kecamatan_tujuan_terpilih + '&berat=1',
				success: function(hasil_paket) {
					console.log(hasil_paket);
					$("select[name=paket]").html(hasil_paket);
					$("input[name=kec]").val(id_kecamatan_tujuan_terpilih);
				}
			});
		});


		$("select[name=paket]").on("change", function() {
			//menampilkan ongkir
			var dataongkir = $("option:selected", this).attr('ongkir');
			var reverse = dataongkir.toString().split('').reverse().join(''),
				ribuan_ongkir = reverse.match(/\d{1,3}/g);
			ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');
			//alert(dataongkir);
			$("#ongkir").html("Rp. " + ribuan_ongkir);


			//menghitung total bayar
			var ongkir = $("option:selected", this).attr('ongkir');
			var total_bayar = parseInt(ongkir) + parseInt(<?= $this->cart->total() ?>);
			var reverse2 = total_bayar.toString().split('').reverse().join(''),
				ribuan_total = reverse2.match(/\d{1,3}/g);
			ribuan_total = ribuan_total.join(',').split('').reverse().join('');
			$(".ttl_bayar").html("Rp. " + ribuan_total);
			$(".bayar").html("Rp. " + ribuan_total);
			// console.log(ribuan_total);

			//estimasi dan ongkir
			var estimasi = $("option:selected", this).attr('estimasi');
			$("input[name=estimasi]").val(estimasi);
			$("input[name=ongkir]").val(dataongkir);
			$("input[name=total_pembayaran]").val(total_bayar);

		});

	});
</script>
</body>

</html>
