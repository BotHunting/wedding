<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wedding Zubed & Nadia</title>
  <link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'><text y='52' font-size='52'>💍</text></svg>">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- Overlay Undangan -->
  <div id="invitation-overlay" class="overlay-genz">
    <div class="overlay-card-genz">
      <h2>Undangan Pernikahan</h2>
      <p>Kepada Yth.<br>
        <span id="guest-name"></span>
      </p>
      <button id="open-invitation-btn" class="btn-genz">Buka Undangan</button>
    </div>
  </div>

  <!-- Background Music -->
  <audio id="bg-music" src="marry-you.mp3" autoplay loop preload="auto"></audio>
  <button id="music-toggle" aria-label="Toggle Music" class="btn-music-genz">
    <i id="music-icon" class="fa fa-volume-up"></i>
  </button>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-white shadow-sm rounded-bottom-4 sticky-top" data-aos="fade-down">
    <div class="container">
      <!-- Brand -->
      <a class="navbar-brand fw-bold" href="dashboard.php">
        <i class="fa fa-heart text-danger"></i> Zubed & Nadia
      </a>

      <!-- Toggle Button -->
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
        aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu Items -->
      <div class="collapse navbar-collapse justify-content-end" id="mainNav">
        <ul class="navbar-nav mb-2 mb-lg-0 gap-2">
          <li class="nav-item">
            <a class="nav-link rounded-3" href="#home"><i class="fa fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link rounded-3" href="#about"><i class="fa fa-heart"></i> Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link rounded-3" href="#gallery"><i class="fa fa-image"></i> Moment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link rounded-3" href="#video-embed"><i class="fa fa-film"></i> Video</a>
          </li>
          <li class="nav-item">
            <a class="nav-link rounded-3" href="#gift"><i class="fa fa-gift"></i> Amplop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link rounded-3" href="#location"><i class="fa fa-map-marker-alt"></i> Lokasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link rounded-3" href="#rsvp"><i class="fa fa-envelope"></i> RSVP</a>
          </li>
                    <li class="nav-item">
            <a class="nav-link rounded-3" href="dashboard.php"><i class="fa fa-browser"></i> Versi Lengkap</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header id="home" data-aos="fade-up" class="hero-section">
    <div class="hero-flower-top"></div>
    <div class="hero-content">
      <h1 class="hero-title">
        <span class="hero-nama">Zubed</span>
        <span class="and">&</span>
        <span class="hero-nama">Nadia</span>
      </h1>
      <p class="subtitle">Minggu, 13 Juli 2025 &bull; Lamongan, Jawa Timur</p>
    </div>
    <div class="hero-flower-bottom"></div>
  </header>

  <!-- Story -->
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

  <!-- Gallery Section -->
  <section id="gallery" class="gallery section" data-aos="fade-left">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="section-header">
        <h2>Galeri Kenangan</h2>
      </div>
      <div class="row gy-4 justify-content-center">
        <?php
        // Daftar gambar galeri
        $gallery = [
          1,
          2,
          3,
          4,
        ];
        foreach ($gallery as $num): ?>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100 rounded-4 shadow-sm" style="background:#fff;">
              <img src="assets/img/gallery/gallery-<?php echo $num; ?>.jpg" class="img-fluid rounded-4"
                alt="Gallery <?php echo $num; ?>">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-<?php echo $num; ?>.jpg" title="Gallery <?php echo $num; ?>"
                  class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Video & Live Stream Section -->
  <section id="video-embed" class="container my-5">
    <div class="row justify-content-center g-4">
      <div class="col-12 text-center mb-4">
        <h2 style="font-family:'Great Vibes',cursive; color:#a0527a; font-size:2.2rem;">Prawed &amp; Streaming</h2>
        <p class="text-secondary" style="font-family:'Montserrat',sans-serif;">Saksikan video prewedding dan live
          streaming TikTok acara kami di bawah ini.</p>
      </div>
      <div class="col-12 col-lg-6">
        <div class="video-container mb-3">
          <iframe src="https://www.youtube.com/embed/VIDEO_ID" title="Pre-Wedding Video"
            class="rounded-4 shadow-sm w-100" allowfullscreen style="aspect-ratio:16/9; min-height:300px; border:none;">
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

  <!-- Events Section -->
  <section id="events" class="events section">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <!-- Tunangan -->
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="card shadow-sm border-0 rounded-4" style="background:#fff;">
            <div class="card-img">
              <img src="assets/img/events-1.jpg" alt="Tunangan Zubed & Nadia"
                style="border-radius:1.5rem 1.5rem 0 0; object-fit:cover; width:100%; height:220px;">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title" style="font-family:'Great Vibes',cursive;color:#a0527a;font-size:2rem;">Acara
                Tunangan</h5>
              <p class="fst-italic" style="color:#c080a0;">Kamis, 13 Juni 2025<br><span style="color:#a0527a;">Pukul
                  09.00 WIB</span></p>
              <p class="card-text">Momen awal perjalanan kami, mempertemukan dua keluarga untuk saling mengenal dan
                mengikat janji menuju masa depan bersama.</p>
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
              <img src="assets/img/events-2.jpg" alt="Pernikahan Zubed & Nadia"
                style="border-radius:1.5rem 1.5rem 0 0; object-fit:cover; width:100%; height:220px;">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title" style="font-family:'Great Vibes',cursive;color:#a0527a;font-size:2rem;">Akad &
                Resepsi Pernikahan</h5>
              <p class="fst-italic" style="color:#c080a0;">Minggu, 13 Juli 2025<br><span style="color:#a0527a;">Pukul
                  09.00 WIB - Selesai</span></p>
              <p class="card-text">Dengan penuh syukur dan cinta, kami mengundang Bapak/Ibu/Saudara/i untuk hadir dan
                memberikan doa restu di hari bahagia kami.</p>
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

  <!-- Gift -->
  <section id="gift" data-aos="fade-up">
    <h2>Amplop Digital</h2>
    <div class="gift">
      <div class="gift-card">
        <i class="fa fa-university"></i>
        <p>Rekening BNI: <strong id="accNumber">1348542066</strong></p>
        <button id="copyBtn" class="btn-genz" onclick="copyAcc()"><i class="fa fa-copy"></i> Salin</button>
      </div>
      <p>
        <script type='text/javascript' src='https://edge-cdn.trakteer.id/js/trbtn-overlay.min.js?v=14-05-2025'></script>
        <script type='text/javascript'
          class='troverlay'>(function () { var trbtnId = trbtnOverlay.init('Dompet Digital', '#2196F3', 'https://trakteer.id/hunty/tip/embed/modal', 'https://trakteer.id/images/mix/coffee.png', '40', 'inline'); trbtnOverlay.draw(trbtnId); })();</script>
      </p>
      <small class="gift-note">Terima kasih atas doa, restu, dan kehadiran Bapak/Ibu/Saudara/i yang menjadi bagian
        dari kebahagiaan kami <span style="color:#e9b384;">&#10084;</span></small>
    </div>
  </section>

  <!-- Location -->
  <section id="location" data-aos="fade-up">
    <h2>Lokasi Acara</h2>
    <p class="location-text">Datang dan rayakan bersama kami di tempat yang penuh berkah ✨</p>
    <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
      <iframe style="border:0; width: 100%; height: 370px;"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.7211723385142!2d112.42495446961121!3d-7.13933096884685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77f75ef076a107%3A0x1d55735c674a82f3!2sJl.%20Jupiter%2011%20No.8%2C%20Tambakboyo%2C%20Tambakrigadung%2C%20Kec.%20Tikung%2C%20Kabupaten%20Lamongan%2C%20Jawa%20Timur%2062281!5e0!3m2!1sid!2sid!4v1747661830656!5m2!1sid!2sid"
        frameborder="0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="btn-wrap">
      <a class="btn-map btn-genz" href="https://maps.app.goo.gl/34XBTgw2gFxbAGFw9" target="_blank">
        <i class="fa fa-map-marked-alt"></i> Buka di Google Maps
      </a>
    </div>
  </section>

  <!-- RSVP -->
  <section id="rsvp" data-aos="fade-up">
    <h2>Konfirmasi Kehadiran</h2>
    <div class="rsvp">
      <div id="rsvpMessage" class="hidden"></div>
      <form id="rsvpForm" onsubmit="sendWA(event)">
        <input type="text" name="name" placeholder="Namamu" required class="input-genz" />
        <select name="attendance" required class="input-genz" onchange="handleAttendanceChange(this)">
          <option value="Hadir">Hadir</option>
          <option value="Tidak Hadir">Tidak Hadir</option>
        </select>
        <input type="number" name="guests" id="guestsInput" placeholder="Jumlah tamu" min="1" required class="input-genz" />
        <textarea name="message" placeholder="Ucapan atau pesan untuk kami (opsional)" class="input-genz"></textarea>
        <button type="submit" class="btn-genz"><i class="fa fa-paper-plane"></i> Kirim via WhatsApp</button>
      </form>
    </div>
  </section>

<script>
function handleAttendanceChange(selectElement) {
  const guestsInput = document.getElementById('guestsInput');
  if (selectElement.value === 'Tidak Hadir') {
    guestsInput.value = 0;
    guestsInput.disabled = true; // Optional: disable the input field
  } else {
    guestsInput.disabled = false; // Enable if "Hadir" is selected
    // You might want to reset the value or ensure min="1" is respected here if needed
  }
}
</script>


  <!-- Countdown -->
  <div class="countdown" data-aos="fade-up"></div>

  <!-- Footer -->
  <footer data-aos="fade-up" class="footer">
    <div class="footer-flower"></div>
    <span class="footer-text">
      &copy; 2025 <b>Zubed &amp; Nadia</b> <span style="color:#e9b384;">&#10084;</span><br>
      <small>Terima kasih telah menjadi bagian dari hari bahagia kami</small>
    </span>
  </footer>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    AOS.init({ duration: 900, once: true });

    window.addEventListener('scroll', () => {
      document.querySelector('nav').classList.toggle('scrolled', window.scrollY > 50);
    });

    const weddingDate = new Date('2025-07-13T00:00:00').getTime();
    const countdownEl = document.querySelector('.countdown');
    function updateCountdown() {
      const now = Date.now();
      const diff = weddingDate - now;
      if (diff < 0) {
        countdownEl.innerHTML = '<p>Acara sedang berlangsung 💍</p>';
        clearInterval(timer);
        return;
      }
      const days = Math.floor(diff / (1000 * 60 * 60 * 24));
      const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
      const minutes = Math.floor((diff / (1000 * 60)) % 60);
      const seconds = Math.floor((diff / 1000) % 60);
      countdownEl.innerHTML = `
        <div data-aos="fade-up"><span>${days}</span><p>Hari</p></div>
        <div data-aos="fade-up" data-aos-delay="100"><span>${hours}</span><p>Jam</p></div>
        <div data-aos="fade-up" data-aos-delay="200"><span>${minutes}</span><p>Menit</p></div>
        <div data-aos="fade-up" data-aos-delay="300"><span>${seconds}</span><p>Detik</p></div>
      `;
    }
    const timer = setInterval(updateCountdown, 1000);
    updateCountdown();

    function copyAcc() {
      const acc = document.getElementById('accNumber').textContent;
      navigator.clipboard.writeText(acc).then(() => {
        const btn = document.getElementById('copyBtn');
        btn.textContent = 'Tersalin!';
        setTimeout(() => btn.innerHTML = '<i class="fa fa-copy"></i> Salin', 2000);
      });
    }

    function sendWA(e) {
      e.preventDefault();
      const form = e.target;
      const name = form.name.value;
      const attendance = form.attendance.value;
      const guests = form.guests.value;
      const message = form.message.value;

      const waText =
        `Halo, saya ingin konfirmasi kehadiran untuk pernikahan:\n` +
        `📛 >> Nama: ${name}\n` +
        `📍 >> Kehadiran: ${attendance}\n` +
        `👥 >> Jumlah Tamu: ${guests}\n` +
        (message ? `📝 >> Pesan: ${message}` : '');

      const waUrl = `https://wa.me/6281290320438?text=${encodeURIComponent(waText)}`;
      window.open(waUrl, '_blank');
      form.reset();
      document.getElementById('rsvpMessage').innerHTML = '✅ Silakan kirim pesan konfirmasi ke WhatsApp kami!';
      document.getElementById('rsvpMessage').classList.add('success', 'show');
    }

    // Background music control
    const audio = document.getElementById('bg-music');
    const toggleBtn = document.getElementById('music-toggle');
    const icon = document.getElementById('music-icon');
    let isPlaying = true;

    window.addEventListener('DOMContentLoaded', () => {
      audio.volume = 0.7;
      audio.muted = false;
      audio.play();
    });

    toggleBtn.onclick = function () {
      if (audio.paused) {
        audio.play();
        icon.className = 'fa fa-volume-up';
        isPlaying = true;
      } else {
        audio.pause();
        icon.className = 'fa fa-volume-mute';
        isPlaying = false;
      }
    };

    // Overlay undangan logic
    function getGuestName() {
      const params = new URLSearchParams(window.location.search);
      let guest = params.get('to');
      if (!guest) {
        guest = prompt("Masukkan nama Anda:", "Tamu Undangan") || "Tamu Undangan";
      } else {
        guest = decodeURIComponent(guest.replace(/\+/g, ' '));
      }
      return guest;
    }
    document.getElementById('guest-name').textContent = getGuestName();

    const overlay = document.getElementById('invitation-overlay');
    const openBtn = document.getElementById('open-invitation-btn');
    openBtn.onclick = function () {
      overlay.style.opacity = '0';
      overlay.style.pointerEvents = 'none';
      setTimeout(() => overlay.style.display = 'none', 400);
      if (audio.paused) audio.play();
    };
    document.body.style.overflow = 'hidden';
    openBtn.addEventListener('click', () => {
      document.body.style.overflow = '';
    });
  </script>
</body>

</html>