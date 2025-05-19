<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Zubed &amp; Nadia's Wedding</title>
  <meta name="description" content="Konfirmasi Kehadiran & Lokasi Acara Zubed & Nadia.">
  <meta name="keywords" content="Zubed, Nadia, Wedding, RSVP, Lokasi, Kehadiran">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'><text y='52' font-size='52'>💍</text></svg>">
</head>

<body class="index-page" style="background: #fff0f6;">

  <header id="header" class="header d-flex align-items-center sticky-top" style="background: #fff0f6;">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <i class="fa fa-heart text-danger me-2"></i>
        <h1 class="sitename mb-0" style="font-size:1.5rem; color:#a0527a;">Zubed &amp; Nadia</h1>
      </a>
      <?php include 'navbar.php'; ?>
    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background position-relative">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Contact</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 370px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.7211723385142!2d112.42495446961121!3d-7.13933096884685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77f75ef076a107%3A0x1d55735c674a82f3!2sJl.%20Jupiter%2011%20No.8%2C%20Tambakboyo%2C%20Tambakrigadung%2C%20Kec.%20Tikung%2C%20Kabupaten%20Lamongan%2C%20Jawa%20Timur%2062281!5e0!3m2!1sid!2sid!4v1747661830656!5m2!1sid!2sid" frameborder="0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Rumah Kediaman Nadia</h3>
                <p>Jl. Jupiter 11 No.8, Lamongan</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>081 290 320 438</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>bot.hunting101@gmail.com</p>
              </div>
            </div>
          </div>

<div class="col-lg-8">
  <form id="rsvpForm" onsubmit="sendToWhatsApp(); return false;" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
    <div class="row gy-4">
      <div class="col-md-6">
        <input type="text" id="name" class="form-control" placeholder="Nama Kamu" required>
      </div>

      <div class="col-md-6">
        <select id="kehadiran" class="form-control" required onchange="handleKehadiranChange()">
          <option value="" disabled selected>Pilih Kehadiran</option>
          <option value="Hadir">Hadir</option>
          <option value="Tidak Hadir">Tidak Hadir</option>
        </select>
      </div>

      <div class="col-md-12">
        <input type="number" id="tamu" class="form-control" placeholder="Jumlah Tamu" required>
      </div>

      <div class="col-md-12">
        <textarea id="message" class="form-control" rows="5" placeholder="Ucapan / Doa" required></textarea>
      </div>

      <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Kirim RSVP via WhatsApp</button>
      </div>
    </div>
  </form>
</div>

        </div>
      </div>
    </section>

  </main>

  <?php include 'footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- WhatsApp RSVP Script -->
   <script>
  function handleKehadiranChange() {
    const kehadiran = document.getElementById("kehadiran").value;
    const tamuInput = document.getElementById("tamu");

    if (kehadiran === "Tidak Hadir") {
      tamuInput.value = 0;
      tamuInput.disabled = true;
    } else {
      tamuInput.disabled = false;
      tamuInput.value = ""; // biar bisa diisi manual
    }
  }

  function sendToWhatsApp() {
    const name = document.getElementById("name").value;
    const kehadiran = document.getElementById("kehadiran").value;
    const tamu = document.getElementById("tamu").value;
    const message = document.getElementById("message").value;

    const finalMessage = `*RSVP Undangan Pernikahan Zubed*\n\n` +
      `Nama: ${name}\n` +
      `Kehadiran: ${kehadiran}\n` +
      `Jumlah Tamu: ${tamu}\n` +
      `Ucapan/Doa: ${message}`;

    const encodedMessage = encodeURIComponent(finalMessage);
    const waLink = `https://wa.me/6281234567890?text=${encodedMessage}`;
    window.open(waLink, '_blank');
  }
</script>
  <script>
    function sendToWhatsApp() {
      const nama = document.getElementById("name").value.trim();
      const kehadiran = document.getElementById("kehadiran").value;
      const tamu = document.getElementById("tamu").value.trim();
      const pesan = document.getElementById("message").value.trim();

      const phone = "6281290320438";
      const text = `*RSVP Undangan Pernikahan Zubed & Nadia*\n\n` +
                   `📛 >> Nama: ${nama}\n` +
                   `📍 >> Kehadiran: ${kehadiran}\n` +
                   `👥 >> Jumlah Tamu: ${tamu}\n` +
                   `📝 >> Ucapan/Doa:\n${pesan}`;

      const url = `https://wa.me/${phone}?text=${encodeURIComponent(text)}`;
      window.open(url, "_blank");
    }
  </script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
