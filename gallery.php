<?php
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Zubed &amp; Nadia's Wedding</title>
  <meta name="description" content="Join us in celebrating the wedding of Faris and Nadia.">
  <meta name="keywords" content="Faris, Nadia, Wedding, Love, Celebration">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'><text y='52' font-size='52'>💍</text></svg>">
</head>

<body class="index-page" style="background: #fff0f6;">

  <header id="header" class="header d-flex align-items-center sticky-top" style="background: #fff0f6;">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <i class="fa fa-heart text-danger" style="margin-right:8px;"></i>
        <h1 class="sitename mb-0" style="font-size:1.5rem; color:#a0527a;">Zubed &amp; Nadia</h1>
      </a>
      <?php include 'navbar.php'; ?>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background" style="background: #fff0f6;">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0" style="font-family: 'Great Vibes', cursive; color: #a0527a;">Galeri Momen Bahagia</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Gallery</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section" style="background: #fff0f6;">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center">
          <?php
          // Daftar gambar galeri
          $gallery = [
            1,2,3,4,5,6,7,8
          ];
          foreach($gallery as $num): ?>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100 rounded-4 shadow-sm" style="background:#fff;">
              <img src="assets/img/gallery/gallery-<?php echo $num; ?>.jpg" class="img-fluid rounded-4" alt="Gallery <?php echo $num; ?>">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-<?php echo $num; ?>.jpg" title="Gallery <?php echo $num; ?>" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section><!-- /Gallery Section -->

    <!-- Video & Live Stream Section -->
    <section id="video-embed" class="container my-5">
      <div class="row justify-content-center g-4">
        <div class="col-12 text-center mb-4">
          <h2 style="font-family:'Great Vibes',cursive; color:#a0527a; font-size:2.2rem;">Prawed &amp; Streaming</h2>
          <p class="text-secondary" style="font-family:'Montserrat',sans-serif;">Saksikan video prewedding dan live streaming TikTok acara kami di bawah ini.</p>
        </div>
        <div class="col-12 col-lg-6">
          <div class="video-container mb-3">
            <iframe src="https://www.youtube.com/embed/VIDEO_ID" title="Pre-Wedding Video"
              class="rounded-4 shadow-sm w-100" allowfullscreen
              style="aspect-ratio:16/9; min-height:300px; border:none;">
            </iframe>
          </div>
          <div class="text-center mt-2">
            <a href="https://www.youtube.com/@bot.hunting" target="_blank" style="color:#a0527a; font-weight:bold;">
              <i class="fab fa-youtube"></i> YouTube: @bot.hunting
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="video-container mb-3">
            <blockquote class="tiktok-embed rounded-4 shadow-sm" cite="https://www.tiktok.com/@bot.hunting"
              data-unique-id="bot.hunting" data-embed-from="embed_page" data-embed-type="creator"
              style="width:100%; min-height:300px;">
              <section>
                <a target="_blank" href="https://www.tiktok.com/@bot.hunting?refer=creator_embed">@bot.hunting</a>
              </section>
            </blockquote>
          </div>
          <div class="text-center mt-2">
            <a href="https://www.tiktok.com/@bot.hunting" target="_blank" style="color:#a0527a; font-weight:bold;">
              <i class="fab fa-tiktok"></i> TikTok Live: @bot.hunting
            </a>
          </div>
        </div>
      </div>
      <script async src="https://www.tiktok.com/embed.js"></script>
    </section>

    <!-- Sosial Media Embed Section -->
    <section id="sosmed-embed" class="container my-5">
      <div class="row justify-content-center g-4">
        <div class="col-12 col-md-6">
          <div class="video-container">
            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/bot.hunting/"
              data-instgrm-version="14"
              style="background:#FFF; border-radius:12px; border:1px solid #dbdbdb; margin:0 auto; min-width:220px; max-width:540px; width:100%; min-height:300px;">
            </blockquote>
          </div>
          <div class="text-center mt-2">
            <a href="https://www.instagram.com/bot.hunting/" target="_blank" style="color:#a0527a; font-weight:bold;">
              <i class="fab fa-instagram"></i> @bot.hunting
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="video-container">
            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/nadiafitrn/"
              data-instgrm-version="14"
              style="background:#FFF; border-radius:12px; border:1px solid #dbdbdb; margin:0 auto; min-width:220px; max-width:540px; width:100%; min-height:300px;">
            </blockquote>
          </div>
          <div class="text-center mt-2">
            <a href="https://www.instagram.com/nadiafitrn/" target="_blank" style="color:#a0527a; font-weight:bold;">
              <i class="fab fa-instagram"></i> @nadiafitrn
            </a>
          </div>
        </div>
      </div>
      <script async src="https://www.instagram.com/embed.js"></script>
    </section>

  </main>

  <?php include 'footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>