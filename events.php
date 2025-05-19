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

<body class="index-page">

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
    <div class="page-title light-background position-relative">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0" style="font-family:'Great Vibes',cursive;color:#a0527a;">Jadwal Acara</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php" style="color:#a0527a;">Home</a></li>
            <li class="current" style="color:#a0527a;">Events</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Events Section -->
    <section id="events" class="events section">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <!-- Tunangan -->
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card shadow-sm border-0 rounded-4" style="background:#fff;">
              <div class="card-img">
                <img src="assets/img/events-1.jpg" alt="Tunangan Zubed & Nadia" style="border-radius:1.5rem 1.5rem 0 0; object-fit:cover; width:100%; height:220px;">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title" style="font-family:'Great Vibes',cursive;color:#a0527a;font-size:2rem;">Acara Tunangan</h5>
                <p class="fst-italic" style="color:#c080a0;">Kamis, 13 Juni 2025<br><span style="color:#a0527a;">Pukul 09.00 WIB</span></p>
                <p class="card-text">Momen awal perjalanan kami, mempertemukan dua keluarga untuk saling mengenal dan mengikat janji menuju masa depan bersama.</p>
                <div class="mb-2">
                  <i class="bi bi-geo-alt"></i> Rumah Kediaman Nadia<br>
                  <span style="font-size:0.95em;">Jl. Jupiter 11 No.8, Lamongan</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Nikah -->
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card shadow-sm border-0 rounded-4" style="background:#fff;">
              <div class="card-img">
                <img src="assets/img/events-2.jpg" alt="Pernikahan Zubed & Nadia" style="border-radius:1.5rem 1.5rem 0 0; object-fit:cover; width:100%; height:220px;">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title" style="font-family:'Great Vibes',cursive;color:#a0527a;font-size:2rem;">Akad & Resepsi Pernikahan</h5>
                <p class="fst-italic" style="color:#c080a0;">Minggu, 13 Juli 2025<br><span style="color:#a0527a;">Pukul 09.00 WIB - Selesai</span></p>
                <p class="card-text">Dengan penuh syukur dan cinta, kami mengundang Bapak/Ibu/Saudara/i untuk hadir dan memberikan doa restu di hari bahagia kami.</p>
                <div class="mb-2">
                  <i class="bi bi-geo-alt"></i> Rumah Kediaman Nadia<br>
                  <span style="font-size:0.95em;">Jl. Jupiter 11 No.8, Lamongan</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Events Section -->

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