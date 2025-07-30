<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyBlog</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
  <!-- Custom Theme CSS -->
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
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
            <a class="nav-link" href="<?= base_url() ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('about') ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url('post') ?>">Blog</a>
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
  <div class="p-5 mb-4 bg-light rounded-3" style="margin-top: 70px;">
    <div class="container py-5">
      <h1 class="display-5 fw-bold">Blog</h1>
      <!-- <p class="col-md-8 fs-4">di laman portal berita</p> -->
    </div>
  </div>

  <!-- Blog Posts -->
  <div class="container">
    <div class="row">
      <?php foreach ($posts as $post) : ?>
        <div class="col-md-12 my-2 card">
          <div class="card-body">
            <h5 class="h5">
              <a href="/post/<?= $post['slug'] ?>"><?= $post['title'] ?></a>
            </h5>
            <p><?= substr($post['content'], 0, 120) ?>...</p>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>

  <!-- Footer -->
  <div class="container py-4">
    <footer class="pt-3 mt-4 text-muted border-top">
      <div class="container">
        &copy; <?= Date('Y') ?>
      </div>
    </footer>
  </div>

  <!-- JS -->
  <script src="<?= base_url('js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>
