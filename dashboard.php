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

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <i class="fa fa-heart text-danger" style="margin-right:8px;"></i>
        <h1 class="sitename mb-0" style="font-size:1.5rem;">Zubed &amp; Nadia</h1>
      </a>

      <?php include 'navbar.php'; ?>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="Faris and Nadia Wedding">
        </div>

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="Faris and Nadia Wedding">
        </div>

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="Faris and Nadia Wedding">
        </div>
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section>

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2 style="font-family: 'Great Vibes', cursive; font-size:2.5rem;">Perjalanan Kami</h2>
      </div>
      <div class="container" data-aos="fade-right">
        <div class="story-card story-card-genz d-flex flex-wrap align-items-center justify-content-center"
          style="gap:2rem;">
          <div class="story-img-wrap text-center">
            <img src="https://cdn.glitch.global/acbb2462-e675-4bbe-9083-50441cd316fd/Faris%20Jaz.jpg?v=1747660644198"
              alt="Zubed" class="story-img rounded-circle"
              style="width:140px; height:140px; object-fit:cover; border:4px solid #e5b6d1;">
            <p class="story-img-caption mt-2" style="font-family:'Montserrat',sans-serif; font-weight:600;">Zubed</p>
          </div>
          <div class="story-img-wrap text-center">
            <img src="https://cdn.glitch.global/acbb2462-e675-4bbe-9083-50441cd316fd/nadya.png?v=1747660927406"
              alt="Nadia" class="story-img rounded-circle"
              style="width:140px; height:140px; object-fit:cover; border:4px solid #e5b6d1;">
            <p class="story-img-caption mt-2" style="font-family:'Montserrat',sans-serif; font-weight:600;">Nadia</p>
          </div>
          <div class="story-text" style="max-width:500px; font-family:'Montserrat',sans-serif;">
            <p>
              Kami nggak langsung dekat dari awal. Bahkan, awal-awal cuma ngobrol ala kadarnya—kayak langganan
              <i>chat Senin-Kamis</i>, itu pun kadang pending dibales 😅. Tapi ternyata, dari obrolan ringan itu
              tumbuh rasa nyaman yang pelan-pelan jadi serius.<br>
              <span class="highlight" style="color:#a0527a; font-weight:bold;">Zubed &amp; Nadia</span> belajar mengenal
              satu sama lain dengan cara sederhana:
              jadi diri sendiri, nggak buru-buru, dan banyak becandanya. Dari yang awalnya iseng nyapa, eh
              sekarang malah siap bareng-bareng ke jenjang yang lebih serius. Siapa sangka, ya? 😄
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-item position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="contact.php" class="stretched-link">
                <h3>Ceremony</h3>
              </a>
              <p>Join us for our wedding ceremony filled with love and joy.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <a href="events.php" class="stretched-link">
                <h3>Reception</h3>
              </a>
              <p>Celebrate with us at the reception with food, music, and dancing.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <a href="gallery.php" class="stretched-link">
                <h3>Pre-Wedding Events</h3>
              </a>
              <p>Join us for various pre-wedding events leading up to the big day.</p>
            </div>
          </div>

        </div>

      </div>

    </section>

    <!-- Recent Photos Section -->
    <section id="recent-photos" class="recent-photos section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Recent Photos</h2>
        <p>Memories from our journey together.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/recent-photos/recent-photos-1.jpg"><img
                  src="assets/img/recent-photos/recent-photos-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/recent-photos/recent-photos-2.jpg"><img
                  src="assets/img/recent-photos/recent-photos-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/recent-photos/recent-photos-3.jpg"><img
                  src="assets/img/recent-photos/recent-photos-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/recent-photos/recent-photos-4.jpg"><img
                  src="assets/img/recent-photos/recent-photos-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/recent-photos/recent-photos-5.jpg"><img
                  src="assets/img/recent-photos/recent-photos-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/recent-photos/recent-photos-6.jpg"><img
                  src="assets/img/recent-photos/recent-photos-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/recent-photos/recent-photos-7.jpg"><img
                  src="assets/img/recent-photos/recent-photos-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/recent-photos/recent-photos-8.jpg"><img
                  src="assets/img/recent-photos/recent-photos-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>

    <!-- Amplop Digital Section -->
    <section id="amplop" class="container my-5" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <div class="card shadow-sm border-0 rounded-4 p-4 text-center" style="background: #fff0f6;">
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

    <!-- RSVP Section -->
    <section id="rsvp" data-aos="fade-up" class="container my-5">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <div class="card shadow-sm border-0 rounded-4 p-4 text-center" style="background: #fff0f6;">
            <h2 class="mb-3" style="font-family: 'Great Vibes', cursive; color: #a0527a;">Konfirmasi Kehadiran</h2>
            <div class="rsvp">
              <div id="rsvpMessage" class="hidden"></div>
              <form id="rsvpForm" onsubmit="sendWA(event)">
                <input type="text" name="name" placeholder="Namamu" required class="input-genz form-control mb-2" />
                <select name="attendance" required class="input-genz form-control mb-2">
                  <option value="Hadir">Hadir</option>
                  <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
                <input type="number" name="guests" placeholder="Jumlah tamu" min="1" required
                  class="input-genz form-control mb-2" />
                <textarea name="message" placeholder="Ucapan atau pesan untuk kami (opsional)"
                  class="input-genz form-control mb-3"></textarea>
                <button type="submit" class="btn-genz btn btn-primary" style="background:#a0527a; border:none;">
                  <i class="fa fa-paper-plane"></i> Kirim via WhatsApp
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <script>
        function sendWA(e) {
          e.preventDefault();
          const form = document.getElementById('rsvpForm');
          const name = form.name.value.trim();
          const attendance = form.attendance.value;
          const guests = form.guests.value;
          const message = form.message.value.trim();
          let text = `*RSVP Pernikahan*\nNama: ${name}\nKehadiran: ${attendance}\nJumlah Tamu: ${guests}`;
          if (message) text += `\nPesan: ${message}`;
          const waNumber = "6281290320438"; // Ganti dengan nomor WhatsApp tujuan
          const url = `https://wa.me/${waNumber}?text=${encodeURIComponent(text)}`;
          window.open(url, '_blank');
        }
      </script>
    </section>

  </main>

  <?php include 'footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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