<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jelajah Jakarta - FAQ</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

	 <!-- Custom Theme CSS -->
  	<link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />

</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container">
			<a class="navbar-brand fw-bold" href="<?= base_url() ?>">Jelajah Jakarta</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('about') ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url('faqs') ?>">FAQ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="p-5 mb-4 bg-light rounded-3 mt-5">
		<div class="container py-5">
			<h1 class="display-5 fw-bold">FAQ Tempat Wisata Jakarta</h1>
			<p class="lead">Pertanyaan yang sering ditanyakan seputar tempat wisata di Jakarta. Semoga membantu liburan kamu jadi lebih mudah dan menyenangkan!</p>
		</div>
	</div>

	<div class="container pb-5">
		<div class="row">
			<?php
			$faqs = [
				["Apa saja tempat wisata yang wajib dikunjungi di Jakarta?", "Beberapa destinasi populer antara lain Monas, Kota Tua, TMII, Ancol, Museum Macan, Ragunan, dan Setu Babakan."],
				["Apakah tempat wisata di Jakarta buka setiap hari?", "Sebagian besar buka setiap hari, namun museum umumnya tutup hari Senin. Cek jam operasional sebelum berkunjung."],
				["Berapa harga tiket masuk tempat wisata di Jakarta?", "Harga tiket bervariasi: Monas Rp5.000, TMII Rp25.000, Ancol Rp25.000–250.000 tergantung wahana."],
				["Apa tempat wisata gratis di Jakarta?", "Kamu bisa mengunjungi Taman Suropati, Taman Menteng, Hutan Kota GBK, Kota Tua (area luar), dan CFD setiap Minggu pagi."],
				["Bagaimana cara ke tempat wisata tanpa kendaraan pribadi?", "Gunakan TransJakarta, MRT, LRT, KRL, atau ojek online. Banyak destinasi mudah diakses dari halte atau stasiun."],
				["Apakah tempat wisata di Jakarta ramah anak dan keluarga?", "Ya! Ragunan, Dufan, KidZania, Sea World, dan Jakarta Aquarium sangat cocok untuk keluarga."],
				["Adakah tempat wisata edukatif di Jakarta?", "Tentu saja! Seperti Museum Nasional, Museum BI, Museum Fatahillah, Planetarium, dan Galeri Nasional."],
				["Kapan waktu terbaik berkunjung ke tempat wisata di Jakarta?", "Sebaiknya pagi hari di hari kerja untuk menghindari keramaian. Weekend dan libur biasanya ramai."],
				["Adakah tempat wisata malam hari di Jakarta?", "Ada! Seperti Ancol malam, rooftop café, JPO Instagramable, Taman Lapangan Banteng, dan Night Festival tertentu."],
				["Apakah perlu reservasi untuk masuk tempat wisata?", "Beberapa tempat menyarankan reservasi online, tapi sebagian besar tetap menerima pengunjung walk-in."]
			];

			foreach ($faqs as $faq) {
				echo '
				<div class="col-md-12 my-3">
					<div class="card shadow-sm border-0">
						<div class="card-body">
							<h5 class="fw-bold text-primary">Q: ' . $faq[0] . '</h5>
							<p class="mb-0">A: ' . $faq[1] . '</p>
						</div>
					</div>
				</div>';
			}
			?>
		</div>
	</div>

	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top text-center">
			&copy; <?= date('Y') ?> Jelajah Jakarta
		</footer>
	</div>

	<!-- Jquery dan Bootstrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>
