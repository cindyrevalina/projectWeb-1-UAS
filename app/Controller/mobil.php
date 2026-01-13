<?php

class Mobil extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Stok Mobil';
        $data['mobil'] = $this->model('Mobil_model')->getAllMobil();
        $this->view('templates/header', $data);
        $this->view('mobil/index', $data);
        $this->view('templates/footer');
    }

    // Fungsi untuk menampilkan halaman Form Tambah
    public function tambah() {
        $data['judul'] = 'Tambah Mobil Baru';
        $this->view('templates/header', $data);
        $this->view('mobil/tambah', $data); // Memanggil file tambah.php yang tadi kita buat
        $this->view('templates/footer');
    }

    // Fungsi untuk memproses data dari Form
    public function prosesTambah() {
        if( $this->model('Mobil_model')->tambahDataMobil($_POST) > 0 ) {
            // Jika berhasil, munculkan pesan (optional) lalu pindah ke halaman index
            header('Location: ' . BASEURL . '/Mobil');
            exit;
        } else {
            // Jika gagal
            header('Location: ' . BASEURL . '/Mobil');
            exit;
        }
    }
}