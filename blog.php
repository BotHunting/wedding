<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Zubed &amp; Nadia's Wedding</title>
  <meta name="description" content="Amplop Digital Zubed & Nadia.">
  <meta name="keywords" content="Amplop Digital, Zubed, Nadia, Wedding, Gift, Celebration">

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
    <div class="page-title light-background position-relative">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0" style="font-family:'Great Vibes',cursive;color:#a0527a;">Amplop Digital</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php" style="color:#a0527a;">Home</a></li>
            <li class="current" style="color:#a0527a;">Amplop Digital</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Amplop Digital Section -->
    <section id="amplop" class="container my-5" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <div class="card shadow-sm border-0 rounded-4 p-4 text-center" style="background: #fff;">
            <h2 class="mb-3" style="font-family: 'Great Vibes', cursive; color: #a0527a;">Amplop Digital</h2>
            <p class="mb-2" style="font-family:'Montserrat',sans-serif;">Rekening BNI:</p>
            <div class="input-group mb-3 justify-content-center" style="max-width:320px;margin:auto;">
              <input type="text" class="form-control text-center" id="rekening-bni" value="1348542066" readonly
                style="background:#fff; border-radius: 8px 0 0 8px;">
              <button class="btn btn-primary" type="button" id="copy-btn"
                style="background:#a0527a; border:none; border-radius: 0 8px 8px 0;">
                <i class="bi bi-clipboard"></i> Salin
              </button>
            </div>
            <div id="copy-success" class="text-success mb-3" style="display:none;">Nomor rekening disalin!</div>
            <div class="my-3">
              <!-- Trakteer Button -->
              <div id="trakteer-btn"></div>
              <script type='text/javascript'
                src='https://edge-cdn.trakteer.id/js/trbtn-overlay.min.js?v=14-05-2025'></script>
              <script type='text/javascript' class='troverlay'>
                (function () {
                  var trbtnId = trbtnOverlay.init(
                    'Dompet Digital',
                    '#2196F3',
                    'https://trakteer.id/hunty/tip/embed/modal',
                    'https://trakteer.id/images/mix/coffee.png',
                    '40',
                    'inline'
                  );
                  trbtnOverlay.draw(trbtnId, document.getElementById('trakteer-btn'));
                })();
              </script>
            </div>
            <p class="mt-3" style="font-style:italic; color:#a0527a;">
              Terima kasih atas doa, restu, dan kehadiran Bapak/Ibu/Saudara/i yang menjadi bagian dari kebahagiaan kami.
            </p>
          </div>
        </div>
      </div>
      <script>
        // Tombol salin rekening
        document.getElementById('copy-btn').onclick = function () {
          const rekening = document.getElementById('rekening-bni');
          rekening.select();
          rekening.setSelectionRange(0, 99999);
          document.execCommand('copy');
          document.getElementById('copy-success').style.display = 'block';
          setTimeout(() => {
            document.getElementById('copy-success').style.display = 'none';
          }, 2000);
        };
      </script>
    </section>

    <!-- Info Tambahan -->
    <section class="container my-5">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 text-center">
          <h3 style="font-family:'Great Vibes',cursive;color:#a0527a;">Doa & Restu Anda Sangat Berarti</h3>
          <p style="font-family:'Montserrat',sans-serif;">
            Kehadiran dan doa restu Anda adalah hadiah terindah bagi kami. Namun jika ingin berbagi kebahagiaan melalui amplop digital, kami sangat berterima kasih.
          </p>
        </div>
      </div>
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