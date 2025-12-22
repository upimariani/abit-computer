<!-- Shop Details Section Begin -->
<section class="shop-details">
	<div class="product__details__pic">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="product__details__breadcrumb">
						<a href="./index.html">Home</a>
						<a href="./shop.html">Shop</a>
						<span>Product Details</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3">

				</div>
				<div class="col-lg-6 col-md-9">
					<div class="tab-content">
						<div class="tab-pane active" id="tabs-1" role="tabpanel">
							<div class="product__details__pic__item">
								<img src="<?= base_url('asset/foto-produk/' . $detail->foto) ?>" alt="">
							</div>
						</div>
						<div class="tab-pane" id="tabs-2" role="tabpanel">
							<div class="product__details__pic__item">
								<img src="<?= base_url('asset/foto-produk/' . $detail->foto) ?>" alt="">
							</div>
						</div>
						<div class="tab-pane" id="tabs-3" role="tabpanel">
							<div class="product__details__pic__item">
								<img src="<?= base_url('asset/foto-produk/' . $detail->foto) ?>" alt="">
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="product__details__content">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8">
					<div class="product__details__text">
						<h4><?= $detail->merk ?></h4>
						<p>Stok : <?= $detail->stok ?></p>

						<h3>Rp. <?= number_format($detail->harga) ?></h3>
						<p><?= $detail->deskripsi ?></p>
						<?php
						if ($this->session->userdata('id_pelanggan')) {
						?>
							<form action="<?= base_url('Pelanggan/cKatalog/addtocart_detail/' . $detail->id_komputer) ?>" method="POST">
								<div class="product__details__cart__option">
									<div class="quantity">
										<div class="pro-qty">
											<input type="number" name="qty" min="1" value="1">
										</div>
									</div>
									<button type="submit" class="primary-btn">add to cart</button>
								</div>
							</form>
						<?php
						}
						?>

					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Shop Details Section End -->
