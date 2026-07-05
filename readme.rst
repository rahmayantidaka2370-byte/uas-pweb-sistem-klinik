###################
Sistem Informasi Klinik
###################

Sistem Informasi Klinik merupakan aplikasi berbasis web yang dibangun menggunakan **CodeIgniter 3**, **PHP**, **MySQL**, dan **Bootstrap 5**. Aplikasi ini bertujuan untuk membantu proses pengelolaan data klinik, mulai dari data dokter, pasien, pemeriksaan, hingga pembuatan laporan pemeriksaan.

*******************
Fitur Utama
*******************

-  Login Admin
-  Dashboard
-  Manajemen Data Dokter (CRUD)
-  Manajemen Data Pasien (CRUD)
-  Manajemen Data Pemeriksaan (CRUD)
-  Riwayat Pemeriksaan Pasien
-  Laporan Pemeriksaan
-  Cetak Laporan Pemeriksaan

**************************
Teknologi yang Digunakan
**************************


- CodeIgniter 3
- PHP 8.x
- MySQL / MariaDB
- Bootstrap 5
- Bootstrap Icons
- HTML5
- CSS3
- JavaScript

*******************
Struktur Project
*******************

```
application/
│
├── controllers/
│   ├── Auth.php
│   ├── Dashboard.php
│   ├── Dokter.php
│   ├── Pasien.php
│   ├── Pemeriksaan.php
│   └── Laporan.php
│
├── models/
│   ├── Auth_model.php
│   ├── Dashboard_model.php
│   ├── Dokter_model.php
│   ├── Pasien_model.php
│   ├── Pemeriksaan_model.php
│   └── Laporan_model.php
│
└── views/
    ├── auth/
    ├── dashboard/
    ├── dokter/
    ├── pasien/
    ├── pemeriksaan/
    ├── laporan/
    └── templates/
```

---


************
Database
************

Import file database ke MySQL melalui phpMyAdmin.

Database terdiri dari tabel:

- users
- dokter
- pasien
- pemeriksaan

*******
Cara Menjalankan Project
*******

1. Clone repository

```bash
git clone https://github.com/rahmayantidaka2370-byte/uas-pweb-sistem-klinik.git
```

2. Pindahkan project ke folder

```
htdocs/
```

3. Buat database baru

```
db_klinik
```

4. Import file SQL database.

5. Atur konfigurasi database pada

```
application/config/database.php
```

6. Jalankan Apache dan MySQL melalui XAMPP.

7. Buka browser

```
http://localhost/sistem-klinik
```

atau

```
http://localhost/sistem-klinik/index.php
``

*********
Login Default
*********

| Username | Password |
|----------|----------|
| admin | admin |

> **Catatan:** Password pada database disimpan menggunakan metode **MD5**.

---

***************
Fitur yang Tersedia
***************

- Autentikasi Login
- Dashboard Statistik
- CRUD Dokter
- CRUD Pasien
- CRUD Pemeriksaan
- Riwayat Pemeriksaan Pasien
- Filter Laporan Berdasarkan Tanggal
- Cetak Laporan

***************
Pengembang
***************
Nama : Rahmayanti Daka
NIM : 24010110017

Nama : andi bital
NIM : 24010110022

Nama : Rian Hidayat
NIM : 24010110045
