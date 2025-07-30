<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyBlog - Jelajah Jakarta</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">

  <!-- Custom Theme CSS -->
  <link rel="stylesheet" href="<?= base_url('css/about.css') ?>" />

</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Jelajah Jakarta</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url('about') ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->
	<header class="p-5 mb-4 bg-light rounded-3 mt-5">
		<div class="container py-5">
			<h1 class="display-5 fw-bold text-center">About</h1>
		</div>
	</header>

	<!-- About Section with Image -->
	<main class="container">
		<div class="row justify-content-center mb-4">
			<div class="col-md-10">
				<div class="card shadow-sm border-0">
					<div class="row g-0 align-items-center">
						<div class="col-md-5">
							<img src="<?= base_url('images/jakarta2.png') ?>" 
							     class="img-fluid rounded-start w-100"
							     style="max-height: 300px; object-fit: cover;" 
							     alt="Jakarta City">
						</div>
						<div class="col-md-7">
							<div class="card-body">
								<h5 class="card-title">Selamat datang di <strong>Jelajah Jakarta!</strong></h5>
								<p class="card-text">
									Blog ini hadir sebagai panduan lengkap bagi kamu yang ingin mengenal lebih dekat berbagai tempat wisata menarik di Jakarta, mulai dari destinasi ikonik hingga spot-spot tersembunyi yang jarang diketahui orang.
								</p>
								<p class="card-text">
									Kami percaya bahwa Jakarta bukan hanya kota sibuk penuh gedung pencakar langit dan kemacetan. Di balik itu semua, ada banyak tempat yang menyimpan sejarah, budaya, hiburan, dan keindahan yang layak dijelajahi—mulai dari Kota Tua, Monas, museum-museum unik, taman kota, hingga wisata kuliner malam yang menggoda.
								</p>
								<p class="card-text">
									Melalui blog ini, kami menyajikan ulasan jujur, tips perjalanan, info harga tiket, rute transportasi, hingga rekomendasi itinerary untuk memudahkanmu merencanakan liburan singkat atau petualangan akhir pekan di ibu kota.
								</p>
								<p class="fw-semibold text-primary">
									<strong>Jelajahi Jakarta, temukan sudut indahnya!</strong>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- Footer -->
	<footer class="container py-4">
		<div class="text-center text-muted border-top pt-3">
			&copy; <?= date('Y') ?> Jelajah Jakarta. All rights reserved.
		</div>
	</footer>

	<!-- JS Scripts -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>
