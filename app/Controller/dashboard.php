<?php

class Dashboard extends Controller {
    public function index() {
        $data['judul'] = 'Dashboard Utama';
        
        // 1. Ambil data mobil untuk Tabel & Hitung Stok
        $data['mobil'] = $this->model('Mobil_model')->getAllMobil();
        $data['total_mobil'] = count($data['mobil']);
        
        // 2. Ambil data pelanggan untuk angka di kotak hijau
        // Kita panggil Pelanggan_model di sini
        $data['pelanggan_list'] = $this->model('Pelanggan_model')->getAllPelanggan();
        $data['total_pelanggan'] = count($data['pelanggan_list']);

        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }
}