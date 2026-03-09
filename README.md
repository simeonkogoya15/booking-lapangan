# Aplikasi Booking Lapangan - PHP Native

Aplikasi Booking Lapangan adalah sistem reservasi lapangan olahraga berbasis **PHP Native + MySQL** yang memungkinkan user melakukan pemesanan lapangan secara online dengan mudah.

Aplikasi ini dibuat untuk mempermudah proses booking lapangan seperti **futsal, basket, dan badminton** melalui antarmuka web yang sederhana dan mudah digunakan.

---

# 🚀 Fitur Utama

## 👤 Authentication
- Login
- Register
- Logout
- Session Login

---

## 👥 User

User dapat melakukan beberapa aktivitas seperti:

- Melihat dashboard
- Melihat daftar lapangan
- Booking lapangan
- Memilih tanggal dan jam
- Melihat daftar booking saya

---

## ⚽ Booking Lapangan

User dapat:

- Memilih lapangan
- Memilih tanggal
- Memilih jam bermain
- Sistem akan mengecek apakah jadwal sudah dibooking atau belum

Jika jadwal sudah terisi maka user tidak bisa memesan jam yang sama.

---

# 🏗️ Struktur Project
booking_lapangan/
│
├── auth/
│ ├── login.php
│ ├── register.php
│ └── logout.php
│
├── config/
│ └── koneksi.php
│
├── images/
│ └── (gambar lapangan)
│
├── user/
│ ├── dashboard.php
│ ├── booking.php
│ └── booking_saya.php
│
├── database/
│ └── booking_lapangan.sql
│
├── index.php
│
└── README.md


---

# 🛠️ Teknologi yang Digunakan

- PHP Native
- MySQL
- Bootstrap
- JavaScript
- HTML5
- CSS3

# 📊 Fitur Dashboard

Pada halaman dashboard, user dapat melihat informasi utama terkait sistem booking lapangan, seperti:

- **Total Booking Saya**  
  Menampilkan jumlah total lapangan yang pernah dibooking oleh user.

- **Jumlah Lapangan**  
  Menampilkan total lapangan yang tersedia dalam sistem.

- **Booking Lapangan**  
  Tombol cepat untuk melakukan pemesanan lapangan.

- **Menu Cepat**
  - Booking Lapangan
  - Booking Saya (melihat daftar booking yang telah dilakukan)

Dashboard ini dirancang agar user dapat dengan cepat melihat informasi penting dan langsung melakukan booking lapangan.