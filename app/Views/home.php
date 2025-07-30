<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jelajah Jakarta</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

  <style>
    .card-horizontal {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
    }

    .card-horizontal img {
      width: 100%;
      max-height: 200px;
      object-fit: cover;
    }

    @media (min-width: 768px) {
      .card-horizontal {
        flex-wrap: nowrap;
      }

      .card-horizontal .card-img-left {
        width: 40%;
        max-height: 100%;
      }

      .card-horizontal .card-body {
        width: 60%;
      }
    }

    .card {
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 1.3rem;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">Jelajah Jakarta</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
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
            <a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="p-5 mb-4 bg-light rounded-3 mt-5">
    <div class="container py-5">
      <h1 class="display-5 fw-bold">Selamat Datang di Jelajah Jakarta</h1>
      <p class="col-md-8 fs-5">Temukan berbagai tempat wisata menarik, edukatif, dan penuh sejarah di Ibu Kota! Dari hiburan keluarga hingga wisata budaya, semua ada di sini.</p>
      <a class="btn btn-primary btn-lg" href="#destinasi" role="button">Eksplor Sekarang</a>
    </div>
  </div>

  <!-- Destinasi Wisata -->
  <div class="container" id="destinasi">
    <div class="row g-4">

      <!-- ANCOL -->
      <div class="col-12">
        <div class="card card-horizontal">
          <div class="card-img-left">
            <img src="<?= base_url('images/ancol.png') ?>" alt="Ancol" class="img-fluid">
          </div>
          <div class="card-body">
            <h5 class="card-title">TAMAN IMPIAN JAYA ANCOL</h5>
            <p class="card-text">Taman Impian Jaya Ancol adalah kawasan wisata terpadu terbesar di Jakarta yang terletak di pesisir utara Ibu Kota. Dengan luas sekitar 552 hektare, Ancol menjadi destinasi favorit bagi keluarga dan wisatawan karena menghadirkan berbagai pilihan hiburan, rekreasi, dan edukasi dalam satu area.</p>
          </div>
        </div>
      </div>

      <!-- MONAS -->
      <div class="col-12">
        <div class="card card-horizontal">
          <div class="card-img-left">
            <img src="<?= base_url('images/monas.png') ?>" alt="Monas" class="img-fluid">
          </div>
          <div class="card-body">
            <h5 class="card-title">MONUMEN NASIONAL</h5>
            <p class="card-text">Monumen Nasional (Monas) adalah simbol kebanggaan dan perjuangan rakyat Indonesia yang terletak di pusat Kota Jakarta, tepatnya di Lapangan Merdeka, Jakarta Pusat. Monumen ini dibangun untuk mengenang semangat juang bangsa Indonesia dalam merebut dan mempertahankan kemerdekaan dari penjajahan.</p>
          </div>
        </div>
      </div>

      <!-- RAGUNAN -->
      <div class="col-12">
        <div class="card card-horizontal">
          <div class="card-img-left">
            <img src="<?= base_url('images/ragunan.jpeg') ?>" alt="Ragunan" class="img-fluid">
          </div>
          <div class="card-body">
            <h5 class="card-title">TAMAN SATWA RAGUNAN</h5>
            <p class="card-text">Taman Margasatwa Ragunan adalah kebun binatang terbesar dan tertua di Indonesia yang terletak di kawasan Pasar Minggu, Jakarta Selatan. Diresmikan pada tahun 1966 dan memiliki luas sekitar 140 hektare, Ragunan menjadi rumah bagi lebih dari 2.000 satwa dari berbagai spesies, baik asli Indonesia maupun dari mancanegara.</p>
          </div>
        </div>
      </div>

      <!-- KOTA TUA -->
      <div class="col-12">
        <div class="card card-horizontal">
          <div class="card-img-left">
            <img src="<?= base_url('images/kotatua.png') ?>" alt="Kota Tua" class="img-fluid">
          </div>
          <div class="card-body">
            <h5 class="card-title">KOTA TUA</h5>
            <p class="card-text">Kota Tua Jakarta adalah kawasan bersejarah yang menampilkan arsitektur kolonial Belanda dan menjadi saksi perjalanan panjang kota Jakarta. Di sini terdapat Museum Fatahillah, kafe-kafe klasik, dan berbagai atraksi budaya yang memikat para pengunjung lokal maupun mancanegara.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Footer -->
  <div class="container py-4">
    <footer class="pt-3 mt-4 text-muted border-top">
      <div class="d-flex justify-content-between">
        <span>&copy; <?= Date('Y') ?> Jelajah Jakarta</span>
        <span>Follow us: @jelajahjakarta</span>
      </div>
    </footer>
  </div>

  <!-- Scripts -->
  <script src="<?= base_url('js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>
