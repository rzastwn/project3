<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Kontak - Jelajah Jakarta</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
	<style>
		body {
			padding-top: 70px;
			background-color: #f8f9fa;
		}

		.contact-card {
			background-color: #ffffff;
			border: 1px solid #e0e0e0;
			border-radius: 15px;
			padding: 30px;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
		}

		.contact-card h5 {
			color: #2c3e50;
			font-weight: 600;
		}

		.icon-circle {
			width: 45px;
			height: 45px;
			background-color: #0d6efd;
			color: #fff;
			display: flex;
			justify-content: center;
			align-items: center;
			border-radius: 50%;
			font-size: 18px;
			margin-right: 15px;
		}
	</style>
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Jelajah Jakarta</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('post') ?>">Blog</a></li>
					<li class="nav-item"><a class="nav-link active" href="<?= base_url('contact') ?>">Contact</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->
	<div class="container mb-5">
		<div class="text-center my-5">
			<h1 class="fw-bold">Hubungi Kami</h1>
			<p class="text-muted">Ada pertanyaan, saran, atau kerja sama? Kami siap menyambutmu!</p>
		</div>

		<!-- Konten Kontak -->
		<div class="row g-4">
			<div class="col-md-6">
				<div class="d-flex align-items-start contact-card">
					<div class="icon-circle">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div>
						<h5>Alamat</h5>
						<p class="mb-0">Jl. M.H. Thamrin No. 1, Menteng, Jakarta Pusat, DKI Jakarta, 10310</p>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="d-flex align-items-start contact-card">
					<div class="icon-circle">
						<i class="fas fa-envelope"></i>
					</div>
					<div>
						<h5>Email</h5>
						<p class="mb-0">info@jelajahjakarta.com<br>support@jelajahjakarta.com</p>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="d-flex align-items-start contact-card">
					<div class="icon-circle">
						<i class="fas fa-phone"></i>
					</div>
					<div>
						<h5>Telepon / WhatsApp</h5>
						<p class="mb-0">+62 812-3456-7890</p>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="d-flex align-items-start contact-card">
					<div class="icon-circle">
						<i class="fas fa-clock"></i>
					</div>
					<div>
						<h5>Jam Operasional</h5>
						<p class="mb-0">Senin – Jumat: 08.00 – 17.00 WIB<br>Sabtu – Minggu: Online Only</p>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="d-flex align-items-start contact-card">
					<div class="icon-circle">
						<i class="fab fa-instagram"></i>
					</div>
					<div>
						<h5>Media Sosial</h5>
						<p class="mb-0">
							<a href="https://instagram.com/jelajahjakarta" target="_blank">Instagram</a> |
							<a href="https://tiktok.com/@jelajahjakarta" target="_blank">TikTok</a> |
							<a href="#" target="_blank">YouTube</a> |
							<a href="#" target="_blank">Facebook</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="bg-dark text-light text-center py-3">
		<div class="container">
			&copy; <?= date('Y') ?> Jelajah Jakarta. All rights reserved.
		</div>
	</footer>

	<!-- Scripts -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>
