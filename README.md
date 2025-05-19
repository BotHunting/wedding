# 💍 Wedding Invitation - Zubed & Nadia

[![GitHub license](https://img.shields.io/github/license/BotHunting/wedding?style=flat-square)](./LICENSE)
![Made with HTML, CSS, JS](https://img.shields.io/badge/made%20with-HTML%2FCSS%2FJS-orange?style=flat-square)
![Responsive](https://img.shields.io/badge/responsive-yes-brightgreen?style=flat-square)

🎉 Proyek ini adalah **Undangan Digital Pernikahan** dengan desain yang estetik, interaktif, dan responsif. Dibuat dengan penuh cinta (dan sedikit ngoding), buat pasangan yang ingin tampil beda di hari bahagianya 💖

## 🌸 Fitur Utama

- ✅ Halaman undangan dengan tema elegan & modern
- ✅ Tanggal & waktu akad resepsi
- ✅ Lokasi Google Maps terintegrasi
- ✅ Galeri foto pasangan
- ✅ Buku tamu (RSVP) otomatis via Google Apps Script
- ✅ Responsif di semua device (HP, tablet, laptop)
- ✅ Animasi smooth & efek kece

## 🧠 Teknologi yang Digunakan

- HTML5
- CSS3 + Animasi & AOS
- JavaScript
- Google Apps Script (untuk RSVP)
- [AOS Library](https://michalsnik.github.io/aos/) (Animate On Scroll)
- Google Fonts

## 🖼️ Screenshot

| Tampilan | Deskripsi |
|---------|-----------|
| ![Home](https://github.com/BotHunting/wedding/assets/placeholder/home.png) | Halaman pembuka undangan |
| ![Gallery](https://github.com/BotHunting/wedding/assets/placeholder/gallery.png) | Galeri foto pasangan |
| ![RSVP](https://github.com/BotHunting/wedding/assets/placeholder/rsvp.png) | Formulir RSVP interaktif |

> *Note: Ganti link gambar di atas sesuai repo kamu ya bro!*

## 🚀 Cara Menjalankan (Lokal)

1. Clone repo ini:
   ```bash
   git clone https://github.com/BotHunting/wedding.git
   cd wedding
2. **Jalankan di server lokal** (PHP Apache/Nginx):
- Pastikan `index.php`, `submit.php`, `rsvp_proxy.php` bisa diakses.
- Buat folder `images/` dan masukkan beberapa foto.
3. **Configure Apps Script**:
- Buat Google Sheets baru, tambahkan sheet `komen` atau `RSVP`.
- Buka **Extensions > Apps Script**, paste `script/Code.gs`.
- Deploy sebagai Web App, izinkan **Anyone**.
- Ganti URL di `submit.php` & `rsvp_proxy.php` sesuai deployment.
4. **Buka di browser**: `http://localhost/path-to-wedding/index.php`

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

> Dibuat dengan ❤️ oleh **Zubed**, versi digital cinta yang #TooGenZ untuk cuma kertas.
