NAMA       : CINDY REVALINA SIMANULLANG

NIM        : 312410417

MATAKULIAH : PEMROGRAMAN


RENTALKU - SISTEM INFORMASI RENTAL MOBIL
DESKRIPSI PROYEK

RENTALKU adalah aplikasi manajemen penyewaan mobil berbasis web yang dibangun dengan arsitektur MVC (Model-View-Controller) menggunakan PHP Native. Aplikasi ini fokus pada kemudahan admin dalam mengelola stok unit, data pelanggan, hingga proses transaksi yang terhitung otomatis.

STRUKTUR FOLDER (PROJECT_UAS)

app/ : Inti aplikasi (Logika sistem)

config/ : Pengaturan database & URL

Controller/ : Penghubung antara input user dan data (Auth, Dashboard, Mobil, Transaksi)

core/ : Library inti framework MVC (App.php, Controller.php, Database.php)

models/ : Pengelola database (mobil_model.php, transaksi_model.php, dll)

views/ : Folder tampilan HTML (Halaman Mobil, Sewa, Transaksi, Dashboard)

public/ : Folder aset yang bisa diakses publik

css/ : File desain (style.css)

img/ : Penyimpanan foto mobil (avanza.jpg, brio.jpg, xpander.jpg)

js/ : File interaktif (script.js)

FITUR UTAMA & SCREENSHOT PENJELASAN

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

D. SISTEM SEWA & PEMBAYARAN

Memilih pelanggan dari database.
Hitung otomatis total biaya berdasarkan selisih tanggal sewa dan kembali.
Pilihan metode pembayaran (Cash/Transfer).
<img width="1139" height="659" alt="image" src="https://github.com/user-attachments/assets/a4d624a3-3ac3-4e1a-8338-5083a8119619" />


E. RIWAYAT TRANSAKSI

Laporan transaksi yang sudah dilakukan.
Menampilkan status transaksi (Proses/Selesai).
CARA INSTALASI
<img width="1330" height="633" alt="image" src="https://github.com/user-attachments/assets/0467c23a-74d4-4503-b8bc-84b3ef49f048" />


Ekstrak folder PROJECT_UAS ke C:/xampp/htdocs/.

Import database melalui phpMyAdmin.

Sesuaikan BASEURL di app/config/Config.php.

Buka browser: http://localhost/PROJECT_UAS/public/

=========================================================== Copyright (c) 2026 - RENTALKU Project OOP Modular
Penjelasan Screenshot untuk Video:
Untuk videomu, kamu bisa menaruh screenshot (SS) dengan urutan berikut:

SS Struktur Folder: Tunjukkan folder app dan public di VS Code untuk membuktikan ini project MVC.

SS Daftar Mobil: Tunjukkan tabel dengan tombol Sewa, Edit, Hapus yang sudah ada teksnya.

SS Form Sewa: Tunjukkan saat kamu mengisi tanggal dan harganya berubah otomatis.

SS Riwayat: Tunjukkan data yang baru kamu input muncul di daftar transaksi.

NARASI VIDEO PRESENTASI RENTALKU
1. Pembukaan (Halaman Login/Dashboard)

"Halo semuanya, perkenalkan nama saya Cindy Revalina Simanullang. Hari ini saya akan mempresentasikan proyek UAS saya, yaitu RENTALKU, sebuah sistem informasi rental mobil berbasis web yang dibangun dengan arsitektur MVC menggunakan PHP Native. Kita mulai dari halaman Dashboard, di sini admin bisa melihat ringkasan data stok mobil, jumlah pelanggan, dan total transaksi secara real-time."

2. Manajemen Data (Halaman Mobil)

"Selanjutnya kita masuk ke menu Mobil. Di sini terdapat daftar unit yang tersedia lengkap dengan foto, nomor plat, dan harga sewa harian. Saya telah menyediakan tombol aksi yang jelas: Hijau untuk Sewa, Kuning untuk Edit, dan Merah untuk Hapus. Fitur Pencarian juga sudah terintegrasi, memudahkan admin mencari unit hanya dengan mengetik nama atau plat nomornya."

3. Proses Transaksi (Halaman Sewa)

"Sekarang, mari kita simulasikan proses penyewaan. Saat kita klik tombol Sewa, sistem akan membawa kita ke Form Konfirmasi & Pembayaran. Di sini kita tinggal memilih pelanggan dari database. Fitur unggulan di sini adalah Kalkulasi Otomatis; saat saya memasukkan tanggal sewa dan tanggal kembali, sistem secara otomatis menghitung total biaya berdasarkan durasi harinya tanpa perlu reload halaman."

4. Laporan & Riwayat (Halaman Transaksi)

"Setelah transaksi diselesaikan, data akan tersimpan ke database dan muncul di halaman Riwayat Transaksi. Admin bisa memantau semua aktivitas penyewaan lengkap dengan metode pembayaran yang digunakan, baik itu Cash maupun Transfer."

5. Penutup (Halaman Logout)

"Terakhir, sistem ini juga dilengkapi fitur keamanan Session sehingga admin harus login terlebih dahulu untuk mengakses data, dan bisa keluar melalui tombol Logout. Demikian presentasi aplikasi RENTALKU dari saya. Terima kasih."
