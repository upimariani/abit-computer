<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('asset/login-form-08/') ?>fonts/icomoon/style.css">

	<link rel="stylesheet" href="<?= base_url('asset/login-form-08/') ?>css/owl.carousel.min.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('asset/login-form-08/') ?>css/bootstrap.min.css">

	<!-- Style -->
	<link rel="stylesheet" href="<?= base_url('asset/login-form-08/') ?>css/style.css">

	<title>Reset Password - Abit Computer</title>
</head>

<body>



	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 order-md-2">
					<img src="<?= base_url('asset/login-form-08/') ?>images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
				</div>
				<div class="col-md-6 contents">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<div class="mb-4">
								<h3>Reset Password <strong>Abit Computer</strong></h3>
								<p class="mb-4">Silahkan masukan username dan no Whatsapp untuk mengirimkan kode OTP reset password.</p>
							</div>
							<?php
							if ($this->session->userdata('success')) {
							?>
								<div class="alert alert-success" role="alert">
									<?= $this->session->userdata('success') ?>
								</div>
							<?php
							}
							if ($this->session->userdata('error')) {
							?>
								<div class="alert alert-danger" role="alert">
									<?= $this->session->userdata('error') ?>
								</div>
							<?php
							}
							?>


							<form action="<?= base_url('Pelanggan/cLogin/kirimotp') ?>" method="post">
								<div class="form-group first">
									<label for="username">Username</label>
									<input type="text" name="username" class="form-control" id="username">
									<?= form_error('username', '<small class="text-danger">', '</small>') ?>
								</div>
								<div class="form-group last mb-4">
									<label for="no_hp">No Whatsapp</label>
									<input type="number" name="no_hp" class="form-control" id="no_hp">
									<?= form_error('no_hp', '<small class="text-danger">', '</small>') ?>
								</div>


								<input type="submit" value="Send OTP" class="btn text-white btn-block btn-primary">
								<a href="<?= base_url('Pelanggan/cLogin') ?>"><span class="d-block text-left my-4 text-muted"> back to lgoin</span></a>
								<a href="<?= base_url('Pelanggan/cLogin/registrasi') ?>"><span class="d-block text-right my-4 text-muted"> or registered here!</span></a>

							</form>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>


	<script src="<?= base_url('asset/login-form-08/') ?>js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url('asset/login-form-08/') ?>js/popper.min.js"></script>
	<script src="<?= base_url('asset/login-form-08/') ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('asset/login-form-08/') ?>js/main.js"></script>
</body>

</html>