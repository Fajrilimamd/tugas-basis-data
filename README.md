# tugas-basis-data
tugas membuat aplikasi yang terhubung dengan data base funsi CRUD
# Aplikasi CRUD PHP – Data Mahasiswa

Aplikasi sederhana untuk mengelola data mahasiswa menggunakan **PHP** dan **MySQL**. Aplikasi ini memiliki fitur dasar CRUD (Create, Read, Update, Delete) dan sudah menggunakan style CSS agar tampilan lebih rapi.

---

## 📌 Fitur
- Tambah data mahasiswa
- Lihat semua data mahasiswa
- Edit data mahasiswa
- Hapus data mahasiswa

---

## 🛠️ Teknologi yang Digunakan
- PHP (Native, tanpa framework)
- MySQL (phpMyAdmin / XAMPP)
- HTML + CSS

---

## 🗄️ Struktur Database

### Nama Database: `db_mahasiswa`

```sql
CREATE DATABASE db_mahasiswa;

USE db_mahasiswa;

CREATE TABLE mahasiswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  jurusan VARCHAR(100),
  angkatan INT
);


Cara Menjalankan Aplikasi
Aktifkan XAMPP (Apache + MySQL)

Buat database db_mahasiswa dan jalankan SQL di atas (via phpMyAdmin)

Letakkan semua file project di folder htdocs/, contoh:
htdocs/crud-php/
Buka browser dan akses:http://localhost/crud-php/index.php
