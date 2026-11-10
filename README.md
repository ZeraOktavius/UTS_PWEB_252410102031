<img width="1366" height="768" alt="Screenshot 2026-11-10 224600" src="https://github.com/user-attachments/assets/478cea08-7db8-43b1-bc75-bf21b7beae74" />
<img width="1366" height="768" alt="Scre<img width="1366" height="768" alt="Screenshot 2026-11-10 224618" src="https://github.com/user-attachments/assets/9a3108bb-605f-4817-87c7-7570dfe2c638" />
<img width="1366" height="768" alt="Screenshot 2026-11-10 224550" src="https://github.com/user-attachments/assets/5f414911-da24-4bb8-a1d6-9a7987a6bece" />
enshot 2026-11-10 224611" src="https://github.com/user-attachments/assets/66263a76-2e85-4322-9ec3-96ac6ed43be0" />

# 🏠 KOSOY – Kos Management System

**KOSOY** merupakan aplikasi berbasis web yang dirancang untuk membantu pengelola kos dalam melihat dan memantau informasi kamar, data penyewa, serta ketersediaan kamar secara sederhana.

Project ini dibuat sebagai pemenuhan tugas **Ujian Tengah Semester (UTS) Pemrograman Web 2026** dengan menggunakan framework Laravel 13.

---

## 👨‍💻 Identitas Pengembang

| Keterangan | Informasi |
|---|---|
| Nama | Zera Oktavius |
| NIM | 252410102031 |
| Mata Kuliah | Pemrograman Web |
| Tahun Akademik | 2026 |
| Nama Project | KOSOY – Kos Management System |

---

## 📌 Deskripsi Aplikasi

KOSOY (Kos Management System) adalah aplikasi simulasi manajemen kos yang menyediakan informasi mengenai kamar, tipe kamar, harga sewa, nama penyewa, dan status ketersediaan kamar.

Aplikasi ini dikembangkan dengan tampilan sederhana, modern, dan mudah digunakan. Tujuannya adalah memberikan gambaran pengelolaan informasi kamar kos melalui sebuah sistem berbasis web.

KOSOY memiliki enam kamar dengan dua kategori tipe kamar, yaitu:

- **Kamar Kecil:** Rp400.000/bulan.
- **Kamar Besar:** Rp600.000/bulan.

Data penyewa terdiri dari Dinar, Rifki, dan Rega.

Seluruh data kamar disimpan menggunakan Array di dalam Controller dan ditampilkan melalui Blade Laravel.

---

## ✨ Fitur Utama

### 1. Login
Halaman autentikasi sederhana untuk pengguna sebelum mengakses halaman utama aplikasi.

### 2. Dashboard
Menampilkan ringkasan informasi kamar, meliputi:
- Total kamar.
- Jumlah kamar terisi.
- Jumlah kamar kosong.
- Daftar informasi kamar.

### 3. Pengelolaan Kamar
Menampilkan informasi seluruh kamar, meliputi:
- Nomor kamar.
- Tipe kamar.
- Harga sewa per bulan.
- Nama penyewa.
- Status kamar.
- Fitur pencarian kamar berdasarkan informasi yang tersedia.

### 4. Profile
Menampilkan informasi pengguna yang sedang login dan informasi mengenai aplikasi KOSOY.

### 5. Logout
Mengakhiri sesi pengguna dan mengarahkan kembali ke halaman Login.

---

## 🎨 Color Palette

KOSOY menggunakan kombinasi tiga warna utama sebagai identitas visual aplikasi.

| Nama Warna | Kode Warna | Penggunaan |
|---|---|---|
| Gargoyle Gas | `#E6D5B7` | Background dan elemen dekoratif |
| Space Cadet | `#1E223D` | Warna utama dan navigasi |
| Orange | `#F54F1B` | Tombol dan aksen |

---

## 🛠️ Teknologi yang Digunakan

Project ini dikembangkan menggunakan beberapa teknologi berikut:

- **PHP 8.5.11** – Bahasa pemrograman backend.
- **Laravel 13** – Framework pengembangan aplikasi web.
- **HTML5** – Struktur halaman website.
- **CSS3** – Pengaturan tampilan dan desain.
- **JavaScript** – Implementasi fitur pencarian.
- **Blade Templating** – Sistem template Laravel.
- **Git & GitHub** – Version control dan penyimpanan source code.

---

## 🏗️ Struktur Project

```text
KOSOY/
│
├── app/
│   └── Http/
│       └── Controllers/
│           └── PageController.php
│
├── public/
│   └── css/
│       └── style.css
│
├── resources/
│   └── views/
│       ├── components/
│       │   ├── navbar.blade.php
│       │   └── footer.blade.php
│       │
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       └── pages/
│           ├── login.blade.php
│           ├── dashboard.blade.php
│           ├── pengelolaan.blade.php
│           └── profile.blade.php
│
├── routes/
│   └── web.php
│
├── .env.example
├── artisan
├── composer.json
└── README.md
```

---

## 📚 Konsep Pemrograman yang Diterapkan

Beberapa konsep pemrograman web yang diterapkan dalam project KOSOY:

1. **MVC (Model-View-Controller):** Memisahkan pengelolaan logika aplikasi, data, dan tampilan.
2. **Routing:** Mengatur alamat URL dan menghubungkannya dengan Controller.
3. **Controller:** Mengatur proses aplikasi dan pengiriman data menuju View.
4. **Blade Templating:** Menggunakan `@extends`, `@section`, `@yield`, `@include`, dan directive Blade lainnya.
5. **Request Handling:** Menerima dan memvalidasi data dari form Login.
6. **Session:** Menyimpan informasi username pengguna selama sesi berlangsung.
7. **Array Rendering:** Mengelola data kamar menggunakan Array dan menampilkannya menggunakan `@foreach`.
8. **Conditional Statement:** Menggunakan `@if` untuk membedakan status kamar.
9. **JavaScript:** Mengimplementasikan pencarian data kamar pada tabel.

---

## ⚙️ Cara Menjalankan Project

Pastikan perangkat telah memiliki:

- PHP.
- Composer.
- Laravel dependencies.
- Git.

Langkah menjalankan project:

**1. Clone repository**

```bash
git clone https://github.com/ZeraOktavius/UTS_PWEB_252410102031.git
```

**2. Masuk ke folder project**

```bash
cd UTS_PWEB_252410102031
```

**3. Install dependencies**

```bash
composer install
```

**4. Buat file environment**

Windows PowerShell:

```powershell
Copy-Item .env.example .env
```

**5. Generate application key**

```bash
php artisan key:generate
```

**6. Atur session**

Pada file `.env`, pastikan menggunakan:

```env
SESSION_DRIVER=file
```

**7. Jalankan server Laravel**

```bash
php artisan serve
```

**8. Buka aplikasi melalui browser**

```text
http://127.0.0.1:8000
```

---

## 📋 Ketentuan dan Batasan Aplikasi

Project KOSOY dibuat sebagai aplikasi simulasi untuk memenuhi ketentuan UTS Pemrograman Web.

Oleh karena itu, aplikasi ini memiliki beberapa batasan:

- Tidak menggunakan database.
- Tidak menerapkan operasi CRUD.
- Data kamar disimpan dalam Array di dalam Controller.
- Data penyewa bersifat statis dan tidak dapat diubah melalui website.
- Fitur pencarian hanya menyaring tampilan data yang sudah tersedia.

---

## 🎯 Tujuan Pengembangan

Melalui project ini, diharapkan dapat memahami penerapan konsep dasar pengembangan aplikasi web menggunakan Laravel, khususnya Routing, MVC, Blade Templating, Request Handling, Session, dan Array Rendering.

---

## 📄 Lisensi

Project ini dibuat untuk keperluan akademik sebagai tugas Ujian Tengah Semester (UTS) mata kuliah Pemrograman Web 2026.

---

**KOSOY – Smart Boarding House Management System**

Developed by **Zera Oktavius** | 2026
