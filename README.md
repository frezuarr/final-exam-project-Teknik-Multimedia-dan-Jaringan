# 📊 Sistem Informasi Manajemen Kas Sekolah  
### 🏫 SMA Negeri 28 Jakarta  
---

Aplikasi sistem informasi berbasis web untuk mendukung proses pencatatan dan pengelolaan transaksi kas pada lingkungan sekolah. Sistem dibangun menggunakan **Laravel 11** dan **Livewire 3**, sebagai bagian dari pelaksanaan **Ujian Akhir Semester** pada mata kuliah Pemrograman Web.

---

## 🏫 Profil Singkat Sekolah  
---

SMA Negeri 28 Jakarta merupakan salah satu sekolah negeri di wilayah Pasar Minggu – Jakarta Selatan, berorientasi pada pembentukan lulusan yang unggul dalam aspek akademik maupun karakter, melalui penerapan visi dan misi pendidikan berstandar nasional.

---

## 🎯 Tujuan Pengembangan  
---

Sistem ini dikembangkan dengan tujuan untuk:

- 📌 meningkatkan efektifitas pencatatan transaksi kas
- 📌 menyediakan riwayat transaksi secara sistematis
- 📌 meminimalisir kesalahan pencatatan
- 📌 menyediakan laporan kas yang akurat
- 📌 mempercepat akses informasi transaksi oleh admin sekolah

---

## ⚙️ Fitur Sistem  
---

### 📘 Informasi Sekolah
- Profil
- Visi & Misi
- Sejarah
- Kontak

### 👤 Manajemen Pengguna
- Administrator  
- Hak akses  

### 🧑‍🏫 Data Akademik
- Data Siswa  
- Data Kelas  
- Data Jurusan  

### 💰 Transaksi Kas
- Kas Masuk  
- Kas Keluar  
- Filtering berdasarkan periode  
- Dashboard monitoring  

### 🎨 Antarmuka Pengguna
- Modern & responsif  
- Dark mode & light mode  
- UI berbasis komponen  

---

## 💻 Kebutuhan Sistem  
---

- PHP 8.2+
- Composer
- NodeJS 20+
- MySQL
- XAMPP/WAMP

---

## 🛠️ Langkah-langkah Instalasi  
---

```bash
git clone https://github.com/syamil/sekolah-kas-template-webdev.git
composer install
npm install
php artisan migrate:fresh --seed
php artisan serve
npm run dev
