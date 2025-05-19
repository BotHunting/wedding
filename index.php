<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Wedding of Arta & Era</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav data-aos="fade-down">
    <a href="#home">Home</a>
    <a href="#story">Tentang Kami</a>
    <a href="#gallery">Moment</a>
    <a href="#video">Video</a>
    <a href="#gift">Amplop</a>
    <a href="#rsvp">RSVP</a>
  </nav>

  <header id="home" data-aos="fade-up">
    <h1>Arta & Era</h1>
    <p>Sabtu, 10 Juli 2025, Bali</p>
  </header>

  <section id="story" data-aos="fade-right">
    <h2>Tentang Kami</h2>
    <p>Kisah cinta Arta dan Era dimulai sejak 2018. Lewat suka duka, mereka tumbuh bersama hingga hari istimewa ini tiba.</p>
  </section>

  <section id="gallery" data-aos="fade-left">
    <h2>Moment</h2>
    <div class="gallery">
      <?php
      // Menampilkan semua file gambar JPG/PNG di folder images
      $imgs = glob(__DIR__ . '/images/*.{jpg,png,jpeg}', GLOB_BRACE);
      foreach($imgs as $img) {
        $url = basename($img);
        echo '<img src="images/'.$url.'" alt="Moment '.$url.'" data-aos="zoom-in" />';
      }
      ?>
    </div>
  </section>

  <section id="video" data-aos="fade-up">
    <h2>Video</h2>
    <div class="video-wrapper">
      <iframe src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
    </div>
  </section>

  <section id="gift" data-aos="fade-up">
    <h2>Amplop Digital</h2>
    <div class="gift">
      <p>Rekening BCA: <strong id="accNumber">1234567890</strong> <button id="copyBtn" onclick="copyAcc()">Salin</button></p>
    </div>
  </section>

  <section id="rsvp" data-aos="fade-up">
    <h2>RSVP</h2>
    <div class="rsvp">
        <div id="rsvpMessage" class="hidden"></div>
        <form id="rsvpForm" onsubmit="submitRSVP(event)">
            <input type="text" name="name" placeholder="Namamu" required />
            <select name="attendance" required>
                <option value="Hadir">Hadir</option>
                <option value="Tidak Hadir">Tidak Hadir</option>
            </select>
            <input type="number" name="guests" placeholder="Jumlah tamu" min="1" required />
            <textarea name="message" placeholder="Pesan untuk kami (opsional)"></textarea>
            <button type="submit">Kirim</button>
        </form>
    </div>
  </section>

  <footer data-aos="fade-up">
    &copy; 2025 Arta & Era
  </footer>

  <!-- Countdown -->
  <div class="countdown" data-aos="fade-up"></div>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true });

    // Navbar scroll effect
    window.addEventListener('scroll', () => {
      document.querySelector('nav').classList.toggle('scrolled', window.scrollY > 50);
    });

    // Countdown timer
    const weddingDate = new Date('2025-07-10T00:00:00').getTime();
    const countdownEl = document.querySelector('.countdown');
    function updateCountdown() {
      const now = Date.now();
      const diff = weddingDate - now;
      if (diff < 0) {
        countdownEl.innerHTML = '<p>Acara telah dimulai!</p>';
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

    // Copy account number
    function copyAcc(){
      const acc = document.getElementById('accNumber').textContent;
      navigator.clipboard.writeText(acc).then(() => {
        const btn = document.getElementById('copyBtn');
        btn.textContent = 'Tersalin!';
        setTimeout(() => btn.textContent = 'Salin', 2000);
      });
    }

    // Submit RSVP form
    async function submitRSVP(e) {
        e.preventDefault();
        
        const form = e.target;
        const submitBtn = form.querySelector('button[type="submit"]');
        const messageDiv = document.getElementById('rsvpMessage');
        
        submitBtn.disabled = true;
        submitBtn.textContent = 'Mengirim...';
        
        try {
            const formData = new FormData(form);
            const response = await fetch('submit.php', {
                method: 'POST',
                body: formData
            });
            
            let result;
            const contentType = response.headers.get("content-type");
            if (contentType && contentType.indexOf("application/json") !== -1) {
                result = await response.json();
            } else {
                throw new Error('Server tidak mengembalikan format JSON yang valid');
            }
            
            if (response.ok && result.status === 'success') {
                messageDiv.innerHTML = '✅ ' + result.message;
                messageDiv.classList.remove('error');
                messageDiv.classList.add('success', 'show');
                form.reset();
                form.style.display = 'none';
            } else {
                throw new Error(result.message || 'Terjadi kesalahan pada server');
            }
        } catch (error) {
            messageDiv.innerHTML = '❌ ' + (error.message || 'Terjadi kesalahan, silakan coba lagi');
            messageDiv.classList.remove('success');
            messageDiv.classList.add('error', 'show');
            console.error('Error:', error);
        } finally {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Kirim';
        }
    }
  </script>
</body>
</html>
