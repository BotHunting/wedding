<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pernikahan Zubed & Nadia</title>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Overlay Undangan -->
    <div id="invitation-overlay"
        style="position:fixed;z-index:9999;inset:0;background:rgba(255,248,243,0.97);display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;">
        <div
            style="background:#fff8f3;border-radius:1.5rem;box-shadow:0 4px 24px #e9b38433;padding:2.5rem 2rem 2rem 2rem;max-width:90vw;">
            <h2 style="font-family:'Great Vibes',cursive;color:#b48a78;font-size:2.5rem;margin-bottom:0.5rem;">Undangan
                Pernikahan</h2>
            <p style="font-size:1.15rem;color:#b48a78;margin-bottom:1.5rem;">Kepada Yth.<br>
                <span id="guest-name"
                    style="font-size:1.3rem;font-weight:600;color:#e9b384;display:inline-block;margin-top:0.3rem;"></span>
            </p>
            <button id="open-invitation-btn"
                style="background:linear-gradient(90deg,#e9b384 60%,#b48a78 100%);color:#fff;padding:0.8rem 2.5rem;border:none;border-radius:1rem;font-size:1.1rem;font-weight:600;box-shadow:0 2px 12px #e9b38433;cursor:pointer;transition:background 0.2s,transform 0.2s;">
                Buka Undangan
            </button>
        </div>
    </div>

    <!-- Background Music -->
    <audio id="bg-music" src="marry-you.weba" autoplay loop preload="auto"></audio>
    <button id="music-toggle" aria-label="Toggle Music"
        style="position:fixed;bottom:24px;right:24px;z-index:99;background:#fff8f3;border:none;border-radius:50%;box-shadow:0 2px 8px #e9b38455;padding:14px;cursor:pointer;transition:background 0.2s;">
        <i id="music-icon" class="fa fa-volume-up" style="color:#b48a78;font-size:1.3rem;"></i>
    </button>

    <!-- Navbar -->
    <nav data-aos="fade-down">
        <a href="#home"><i class="fa fa-home"></i> Home</a>
        <a href="#story"><i class="fa fa-heart"></i> Tentang Kami</a>
        <a href="#gallery"><i class="fa fa-image"></i> Moment</a>
        <a href="#video"><i class="fa fa-film"></i> Video</a>
        <a href="#gift"><i class="fa fa-gift"></i> Amplop</a>
        <a href="#location"><i class="fa fa-map-marker-alt"></i> Lokasi</a>
        <a href="#rsvp"><i class="fa fa-envelope"></i> RSVP</a>
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
            <p class="subtitle">Sabtu, 10 Juli 2025 &bull; Surabaya, Jawa Timur</p>
        </div>
        <div class="hero-flower-bottom"></div>
    </header>

    <!-- Story -->
    <section id="story" data-aos="fade-right">
        <h2>Perjalanan Kami</h2>
        <div class="story-card">
            <img src="images/couple.jpg" alt="Zubed dan Nadia" class="story-img" />
            <div>
                <p>
                    Semua berawal dari obrolan santai dan perkenalan yang sederhana. <span class="highlight">Zubed &
                        Nadia</span> bukan tipe pasangan yang langsung klik dari awal, tapi perlahan saling mengenal,
                    saling menghargai, dan akhirnya tumbuh rasa yang tulus.
                    Perjalanan ini mungkin nggak penuh drama, tapi justru itulah yang bikin semuanya terasa nyata dan
                    istimewa. Sekarang kami siap melangkah bersama, membangun masa depan dengan niat baik dan hati yang
                    tenang.
                </p>
            </div>
        </div>
    </section>


    <!-- Gallery -->
    <section id="gallery" data-aos="fade-left">
        <h2>Galeri Kenangan</h2>
        <div class="gallery">
            <?php
            $imgs = glob(__DIR__ . '/images/*.{jpg,png,jpeg}', GLOB_BRACE);
            foreach ($imgs as $img) {
                $url = basename($img);
                echo '<div class="gallery-item"><img src="images/' . $url . '" alt="Moment ' . $url . '" data-aos="zoom-in" /></div>';
            }
            ?>
        </div>
    </section>

    <!-- Video -->
    <section id="video" data-aos="fade-up">
        <h2>Video Pre-Wedding</h2>
        <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Gift -->
    <section id="gift" data-aos="fade-up">
        <h2>Amplop Digital</h2>
        <div class="gift">
            <div class="gift-card">
                <i class="fa fa-university"></i>
                <p>Rekening BCA: <strong id="accNumber">1234567890</strong></p>
                <button id="copyBtn" onclick="copyAcc()"><i class="fa fa-copy"></i> Salin</button>
            </div>
            <p>
                <script type='text/javascript'
                    src='https://edge-cdn.trakteer.id/js/trbtn-overlay.min.js?v=14-05-2025'></script>
                <script type='text/javascript'
                    class='troverlay'>(function () { var trbtnId = trbtnOverlay.init('Dompet Digital', '#2196F3', 'https://trakteer.id/hunty/tip/embed/modal', 'https://trakteer.id/images/mix/coffee.png', '40', 'inline'); trbtnOverlay.draw(trbtnId); })();</script>
            </p>

            <small class="gift-note">Terima kasih atas doa, restu, dan kehadiran Bapak/Ibu/Saudara/i yang menjadi bagian
                dari
                kebahagiaan kami <span style="color:#e9b384;">&#10084;</span></small>
        </div>
    </section>

    <!-- Location -->
    <section id="location" data-aos="fade-up">
        <h2>Lokasi Acara</h2>
        <p class="location-text">Datang dan rayakan bersama kami di tempat yang penuh berkah ✨</p>
        <div class="map-container" style="width:100%; height:400px; margin: 20px 0;">
            <iframe title="Google Maps"
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d476.00655252569794!2d112.75114072813278!3d-7.291576234308819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMTcnMjkuNyJTIDExMsKwNDUnMDQuNiJF!5e0!3m2!1sid!2sid!4v1747656519882!5m2!1sid!2sid"
                width="100%" height="100%" style="border:0; border-radius: 12px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="btn-wrap" style="text-align:center;">
            <a class="btn-map" href="https://maps.app.goo.gl/DXXG9sZsz8zgX3BS7" target="_blank"
                style="background:#e9b384; color:white; padding:12px 20px; border-radius:8px; text-decoration:none;">
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
                <input type="text" name="name" placeholder="Namamu" required />
                <select name="attendance" required>
                    <option value="">Konfirmasi Kehadiran</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
                <input type="number" name="guests" placeholder="Jumlah tamu" min="1" required />
                <textarea name="message" placeholder="Ucapan atau pesan untuk kami (opsional)"></textarea>
                <button type="submit"><i class="fa fa-paper-plane"></i> Kirim via WhatsApp</button>
            </form>
        </div>
    </section>

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
    <script>
        AOS.init({ duration: 900, once: true });

        window.addEventListener('scroll', () => {
            document.querySelector('nav').classList.toggle('scrolled', window.scrollY > 50);
        });

        const weddingDate = new Date('2025-07-10T00:00:00').getTime();
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
                `Nama: ${name}\n` +
                `Kehadiran: ${attendance}\n` +
                `Jumlah Tamu: ${guests}\n` +
                (message ? `Pesan: ${message}` : '');

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

        // Langsung putar musik saat halaman dibuka (tanpa klik)
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
            // Ambil nama dari parameter URL ?to=Nama%20Tamu, default "Tamu Undangan"
            const params = new URLSearchParams(window.location.search);
            return params.get('to') ? decodeURIComponent(params.get('to').replace(/\+/g, ' ')) : 'Tamu Undangan';
        }
        document.getElementById('guest-name').textContent = getGuestName();

        const overlay = document.getElementById('invitation-overlay');
        const openBtn = document.getElementById('open-invitation-btn');
        openBtn.onclick = function () {
            overlay.style.opacity = '0';
            overlay.style.pointerEvents = 'none';
            setTimeout(() => overlay.style.display = 'none', 400);
            // Musik langsung play saat undangan dibuka
            if (audio.paused) audio.play();
        };
        // Optional: Disable scroll saat overlay tampil
        document.body.style.overflow = 'hidden';
        openBtn.addEventListener('click', () => {
            document.body.style.overflow = '';
        });
    </script>
</body>

</html>