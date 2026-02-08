<!-- Hero Section Begin -->
<section class="hero">
	<div class="hero__slider owl-carousel">
		<img style="width: auto;" src="<?= base_url('asset/') ?>h1.png">
		<img style="width: auto;" src="<?= base_url('asset/') ?>h2.png">
	</div>
</section>
<!-- Hero Section End -->
<!-- Product Section Begin -->
<hr>
<?php
if ($this->session->userdata('success') != '') {
?>
	<div class="alert alert-success" role="alert">
		<?= $this->session->userdata('success') ?>
	</div>
<?php
}
?>
<!-- Banner Section Begin -->

<!-- Product Section End -->
<!-- Banner Section Begin -->
<hr class="mt-5">

<!-- Banner Section End -->
<section class="product spad mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="filter__controls">
					<li class="active" data-filter="*">Semua</li>
					<?php
					foreach ($kategori as $key => $value) {
						$kategori = $value->nama_kategori;
						$code = str_replace(" ", "-", $kategori);
					?>
						<li data-filter=".<?= $code ?>"><?= $value->nama_kategori ?></li>
					<?php
					}
					?>
				</ul>
			</div>
		</div>
		<div class="row product__filter">
			<?php
			foreach ($produk as $key => $value) {
				$kategori = $value->nama_kategori;
				$code = str_replace(" ", "-", $kategori);
			?>
				<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix <?= $code ?>">
					<div class="product__item">
						<div class="product__item__pic set-bg" data-setbg="<?= base_url('asset/foto-produk/' . $value->foto) ?>">

							<ul class="product__hover">
								<li><a href="<?= base_url('Pelanggan/cKatalog/detail/' . $value->id_komputer) ?>"><img src="<?= base_url('asset/malefashion-master/') ?>img/icon/search.png" alt=""><span>Detail</span></a></li>
							</ul>
						</div>
						<div class="product__item__text">
							<h6><?= $value->merk ?></h6>
							<?php
							if ($this->session->userdata('id_pelanggan') != '') {
							?>
								<a href="<?= base_url('Pelanggan/cKatalog/add_cart/' . $value->id_komputer) ?>" class="add-cart">+ Add To Cart</a>
							<?php
							}
							?>

							<!-- <div class="rating">
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
						</div> -->
							<h5>Rp. <?= number_format($value->harga) ?></h5>

						</div>
					</div>
				</div>
			<?php
			}
			?>


		</div>
	</div>
</section>
<!-- Product Section End -->
