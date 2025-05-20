<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="dashboard.php" class="active">Home</a></li>
    <li><a href="our-story.php">Tentang Kami</a></li>
    <li><a href="gallery.php">Moment</a></li>
    <li><a href="events.php">Acara</a></li>
    <li><a href="blog.php">Amplop</a></li>
    <li><a href="contact.php">Lokasi & RSVP</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
  <!-- Background Music Button & Audio -->
  <audio id="bg-music" src="https://cdn.glitch.global/acbb2462-e675-4bbe-9083-50441cd316fd/marry-you.mp3?v=1747743840176" autoplay loop preload="auto"></audio>
  <button id="music-toggle" aria-label="Toggle Music" class="btn-music-genz"
    style="position: fixed; bottom: 20px; left: 20px; z-index: 9999; background: #fff0f6; border: none; border-radius: 50%; width: 48px; height: 48px; box-shadow: 0 2px 8px #e5b6d1;">
    <i id="music-icon" class="bi bi-volume-up" style="font-size: 1.5rem; color: #a0527a;"></i>
  </button>
  <script>
    // Music toggle button logic
    document.addEventListener('DOMContentLoaded', function () {
      const music = document.getElementById('bg-music');
      const toggle = document.getElementById('music-toggle');
      const icon = document.getElementById('music-icon');
      if (toggle && music && icon) {
        toggle.addEventListener('click', function () {
          if (music.paused) {
            music.play();
            icon.classList.remove('bi-volume-mute');
            icon.classList.add('bi-volume-up');
          } else {
            music.pause();
            icon.classList.remove('bi-volume-up');
            icon.classList.add('bi-volume-mute');
          }
        });
        // Set icon on load
        music.addEventListener('play', function () {
          icon.classList.remove('bi-volume-mute');
          icon.classList.add('bi-volume-up');
        });
        music.addEventListener('pause', function () {
          icon.classList.remove('bi-volume-up');
          icon.classList.add('bi-volume-mute');
        });
      }
    });
  </script>
</nav>