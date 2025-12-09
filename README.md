📊 Sistem Informasi Manajemen Kas Sekolah
🏫 SMA Negeri 28 Jakarta

Aplikasi sistem informasi berbasis web untuk mendukung proses pencatatan dan pengelolaan transaksi kas pada lingkungan sekolah. Sistem dibangun menggunakan Laravel 11 dan Livewire 3, sebagai bagian dari pelaksanaan Ujian Akhir Semester pada mata kuliah Pemrograman Web.

🏫 Profil Singkat Sekolah

SMA Negeri 28 Jakarta merupakan salah satu sekolah negeri di wilayah Pasar Minggu – Jakarta Selatan, berorientasi pada pembentukan lulusan yang unggul dalam aspek akademik maupun karakter, melalui penerapan visi dan misi pendidikan berstandar nasional.

🎯 Tujuan Pengembangan

Sistem ini dikembangkan dengan tujuan untuk:

📌 meningkatkan efektifitas pencatatan transaksi kas,

📌 menyediakan riwayat transaksi secara sistematis,

📌 meminimalisir kesalahan pencatatan,

📌 menyediakan laporan kas yang akurat,

📌 mempercepat akses informasi transaksi oleh admin sekolah.

⚙️ Fitur Sistem
📘 Informasi Sekolah

Profil

Visi & Misi

Sejarah

Kontak

👤 Manajemen Pengguna

Administrator

Hak akses

🧑‍🏫 Data Akademik

Data Siswa

Data Kelas

Data Jurusan

💰 Transaksi Kas

Kas Masuk

Kas Keluar

Filtering berdasarkan periode

Dashboard monitoring

🎨 Antarmuka Pengguna

Modern & responsif

Dark mode & light mode

UI berbasis komponen

💻 Kebutuhan Sistem

PHP 8.2+

Composer

NodeJS 20+

MySQL

XAMPP/WAMP

## Langkah-langkah Instalasi

1. Clone repository ini dengan memilih tipe protokol HTTPS atau SSH. Jika belum memiliki setup SSH, bisa menggunakan HTTPS.

**HTTPS:**

```bash
$ git clone https://github.com/mughnihaunan/sekolah-kas-template-webdev.git
```

**SSH:**

```bash
$ git clone git@github.com:mughnihaunan/sekolah-kas-template-webdev.git
```

2. Instal seluruh packages yang dibutuhkan.

```bash
$ npm install
```

```bash
$ composer install
```

3. Siapkan database dan atur value pada file `.env` sesuai dengan konfigurasi Anda.

```bash
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

4. Ubah value `APP_NAME=` pada file `.env` menjadi nama aplikasi yang Anda inginkan.

```bash
APP_NAME=
```

5. Ubah value `APP_TIMEZONE=` pada file `.env` menjadi lokasi Timezone Anda.

```bash
APP_TIMEZONE=
```

6. Migrate seluruh migrasi dan seeding data palsu.

```bash
$ php artisan migrate:fresh --seed
```

7. Jalankan local server Laravel.

```bash
$ php artisan serve
```

```bash
INFO  Server running on [http://127.0.0.1:8000].

Press Ctrl+C to stop the server
```

8. Jalankan juga development server untuk NPM.

```bash
$ npm run dev
```

```bash
> dev
> vite


  VITE v5.4.9  ready in 341 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h + enter to show help

  LARAVEL v11.28.1  plugin v1.0.5

  ➜  APP_URL: http://localhost

```

## User default aplikasi untuk login

```bash
Email   : admin@mail.com
Pass    : secret
```

🧩 Teknologi Digunakan

⚡ Laravel 11

⚡ Livewire 3

🎨 Bootstrap 5

🖥️ Mazer Admin Template

🌀 Swiper.js

📁 Informasi Proyek

🧾 Mata kuliah : Pemrograman Web

🧾 Kegiatan : UAS

🧾 Institusi : SMA Negeri 28 Jakarta

🧾 Tahun : 2025

👨‍💻 Pengembang

Syamil
Pengembang sistem informasi manajemen kas sekolah
2025
