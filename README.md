# 🧾 CRUD Data Barang - Laravel Project

## 📌 Deskripsi Proyek
Aplikasi ini merupakan sistem CRUD (Create, Read, Update, Delete) sederhana yang dibangun menggunakan framework Laravel, PHP, dan MySQL. Aplikasi ini digunakan untuk mengelola data barang seperti menambah, menampilkan, mengubah, dan menghapus data secara terstruktur.

Project ini dibuat sebagai latihan implementasi konsep MVC (Model, View, Controller) pada Laravel serta pemahaman dasar pengembangan aplikasi web.

---

## 🎯 Tujuan Proyek
Proyek ini bertujuan untuk:
- Memahami konsep dasar CRUD pada aplikasi web
- Mempelajari framework Laravel
- Memahami konsep MVC (Model, View, Controller)
- Mengelola database menggunakan MySQL
- Melatih pembuatan aplikasi web sederhana yang terstruktur

---

## ⚙️ Teknologi yang Digunakan
- Laravel (Framework PHP)
- PHP
- MySQL / MariaDB
- Composer
- HTML, CSS (Blade Template)
- XAMPP (local server)
- Visual Studio Code

---

## ✨ Fitur Aplikasi
1. ➕ Create (Tambah Data)
Pengguna dapat menambahkan data barang baru ke dalam database.

2. 📄 Read (Tampilkan Data)
Menampilkan seluruh data barang dalam bentuk tabel.

3. ✏️ Update (Edit Data)
Mengubah data barang yang sudah tersimpan di database.

4. ❌ Delete (Hapus Data)
Menghapus data barang dari database

---

## 🗂️ Struktur Database (Tabel Barang)
- id (Primary Key)
- nama_barang
- kategori
- harga
- stok
- created_at
- updated_at

---

## 🚀 Cara Instalasi
1. Clone repository
2. composer install
3. cp .env.example .env
4. atur database di .env
5. php artisan key:generate
6. php artisan migrate
7. php artisan serve
8. buka http://127.0.0.1:8000

---

## 📁 Struktur Folder Penting Laravel
app/
 └── Http/
      └── Controllers/
          └── BarangController.php

resources/
 └── views/
      └── barang/
          ├── index.blade.php
          ├── create.blade.php
          ├── edit.blade.php

routes/
 └── web.php

---

## 🔐 Konsep yang Dipelajari
1. Routing di Laravel
2. Controller
3. Model dan Database
4. Blade Template Engine
5. CRUD Operation
6. Koneksi database MySQL

--- 


## 👨‍💻 Author
Riezky Maharani
Mahasiswa Sistem Informasi