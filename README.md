<h1 align="center">💍 Wedding Invitation<br>Zubed & Nadia</h1>

<p align="center">
  <img src="https://img.shields.io/github/license/BotHunting/wedding?style=flat-square" alt="License"/>
  <img src="https://img.shields.io/badge/made%20with-HTML%2FCSS%2FJS-orange?style=flat-square" alt="Tech"/>
  <img src="https://img.shields.io/badge/responsive-yes-brightgreen?style=flat-square" alt="Responsive"/>
</p>

<p align="center">
  <b>Undangan Digital Pernikahan</b> dengan desain <i>estetik</i>, interaktif, dan responsif.<br>
  Dibuat penuh cinta untuk pasangan yang ingin tampil beda di hari bahagianya. 💖
</p>

---

## 🌸 Fitur Utama

- ✨ Tema elegan & modern, cocok untuk generasi kekinian
- 📅 Tanggal & waktu akad/resepsi yang jelas
- 📍 Lokasi Google Maps terintegrasi
- 🖼️ Galeri foto kenangan
- 📝 Buku tamu (RSVP) otomatis via Google Apps Script
- 📱 100% responsif di semua device
- 🎬 Animasi smooth & efek kece

---

## 🧠 Teknologi yang Digunakan

- HTML5, CSS3 (AOS Animation), JavaScript
- Google Apps Script (untuk RSVP)
- [AOS Library](https://michalsnik.github.io/aos/) (Animate On Scroll)
- Google Fonts

---

## 🖼️ Preview

| Tampilan | Deskripsi |
|----------|-----------|
| ![Home](https://github.com/BotHunting/wedding/assets/placeholder/home.png) | Halaman pembuka undangan |
| ![Gallery](https://github.com/BotHunting/wedding/assets/placeholder/gallery.png) | Galeri foto pasangan |
| ![RSVP](https://github.com/BotHunting/wedding/assets/placeholder/rsvp.png) | Formulir RSVP interaktif |

> *Note: Ganti link gambar di atas sesuai repo kamu!*

---

## 🚀 Cara Menjalankan (Lokal)

1. **Clone repo ini:**
   ```bash
   git clone https://github.com/BotHunting/wedding.git
   cd wedding
   ```
2. **Jalankan di server lokal** (PHP Apache/Nginx):
   - Pastikan `index.php`, `submit.php`, `rsvp_proxy.php` bisa diakses.
   - Buat folder `images/` dan masukkan beberapa foto.
3. **Konfigurasi Apps Script:**
   - Buat Google Sheets baru, tambahkan sheet `komen` atau `RSVP`.
   - Buka **Extensions > Apps Script**, paste `script/Code.gs`.
   - Deploy sebagai Web App, izinkan **Anyone**.
   - Ganti URL di `submit.php` & `rsvp_proxy.php` sesuai deployment.
4. **Buka di browser:**  
   `http://localhost/path-to-wedding/index.php`

---

## 📸 Demo & Screenshot

> Ganti placeholder ini dengan screenshot nyata dari `images/` atau link Live Demo.

| Halaman Utama | Galeri Foto | RSVP List |
|:-------------:|:-----------:|:---------:|
| ![Home Placeholder](https://via.placeholder.com/300x200) | ![Gallery Placeholder](https://via.placeholder.com/300x200) | ![RSVP Placeholder](https://via.placeholder.com/300x200) |

---

## 🤝 Cara Kontribusi

1. Fork repo ini 🔀
2. Buat branch baru (`git checkout -b fitur-xyz`)
3. Commit perubahan kamu (`git commit -m "Tambah fitur XYZ"`)
4. Push ke branch-mu (`git push origin fitur-xyz`)
5. Buka Pull Request 🚀

---

## 📜 Lisensi

Lisensi MIT – lihat [LICENSE](LICENSE) untuk detail.

---

<p align="center">
  Dibuat dengan <span style="color:#e9b384;">&#10084;</span> oleh <b>Zubed</b>, versi digital cinta yang #TooGenZ untuk cuma kertas.
</p>
