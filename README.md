# UAS PEMOGRAMAN WEB 1

## NAMA       : CINDY REVALINA SIMANULLANG
## NIM        : 312410417
## MATAKULIAH : PEMROGRAMAN

# RENTALKU - SISTEM INFORMASI RENTAL MOBIL
## DESKRIPSI PROYEK

RENTALKU adalah aplikasi manajemen penyewaan mobil berbasis web yang dibangun dengan arsitektur MVC (Model-View-Controller) menggunakan PHP Native. Aplikasi ini fokus pada kemudahan admin dalam mengelola stok unit, data pelanggan, hingga proses transaksi yang terhitung otomatis.

### 📂 Struktur Folder Proyek
```php
PROJECT_UAS/
├── app/                # Inti aplikasi (Logika MVC)
│   ├── config/         # Konfigurasi Database & Base URL
│   ├── Controller/     # Pengatur alur aplikasi (Auth, Mobil, Transaksi)
│   ├── core/           # Library utama (App, Controller, Database)
│   ├── models/         # Pengelola data database (Query SQL)
│   └── views/          # Tampilan antarmuka pengguna
├── public/             # Folder akses publik (Assets)
│   ├── css/            # File stylesheet (style.css)
│   ├── img/            # Penyimpanan foto armada mobil
│   ├── js/             # Script interaktif (script.js)
│   └── index.php       # Entry point utama aplikasi
└── .htaccess           # Konfigurasi URL agar bersih/SEO friendly
```


## FITUR UTAMA & SCREENSHOT PENJELASAN

A. LOGIN & AUTH
Memastikan hanya admin terdaftar yang bisa masuk ke sistem.
<img width="569" height="630" alt="image" src="https://github.com/user-attachments/assets/34a98db2-48dc-4e0e-8b3d-c152fb70d5c1" />


B. DASHBOARD
Menampilkan kartu statistik stok mobil, pelanggan, dan riwayat.
<img width="1270" height="666" alt="image" src="https://github.com/user-attachments/assets/7be4edfd-6d09-4c2c-856f-5129fe28f6ae" />


C. DAFTAR MOBIL (CRUD)
Tampilan tabel yang rapi dengan foto unit dan harga sewa.
<img width="1326" height="658" alt="image" src="https://github.com/user-attachments/assets/3f1e7632-042d-460a-9a8e-ea3205b18e9f" />


Tombol Aksi: Hijau (Sewa), Kuning (Edit), Merah (Hapus).

Fitur Pencarian: Mencari mobil berdasarkan nama atau plat nomor secara instan.


D. Menghapus data armada mobil yang sudah tidak digunakan dari database secara permanen.
<img width="1300" height="503" alt="image" src="https://github.com/user-attachments/assets/d76f84bf-165c-4cb9-8d41-5dba6e486c85" />


E. SISTEM SEWA & PEMBAYARAN

Memilih pelanggan dari database.
Hitung otomatis total biaya berdasarkan selisih tanggal sewa dan kembali.
Pilihan metode pembayaran (Cash/Transfer).
<img width="1139" height="659" alt="image" src="https://github.com/user-attachments/assets/a4d624a3-3ac3-4e1a-8338-5083a8119619" />


F. RIWAYAT TRANSAKSI

Laporan transaksi yang sudah dilakukan.
Menampilkan status transaksi (Proses/Selesai).
CARA INSTALASI
<img width="1330" height="633" alt="image" src="https://github.com/user-attachments/assets/0467c23a-74d4-4503-b8bc-84b3ef49f048" />


Ekstrak folder PROJECT_UAS ke C:/xampp/htdocs/.

Import database melalui phpMyAdmin.

Sesuaikan BASEURL di app/config/Config.php.

## Buka browser: http://localhost/PROJECT_UAS/public/

## Link Youtube:
https://youtu.be/kJAxbcQy4XE?si=mO7xbFk9vqJXjx-h


