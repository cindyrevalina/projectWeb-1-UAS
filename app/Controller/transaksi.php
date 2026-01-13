<?php
class Transaksi extends Controller {
    // Tampilan Riwayat
    public function index() {
        $data['judul'] = 'Riwayat Transaksi';
        $data['transaksi'] = $this->model('transaksi_model')->getAllTransaksi();
        $this->view('templates/header', $data);
        $this->view('transaksi/index', $data);
        $this->view('templates/footer');
    }

    // TAMPILKAN SISTEM PEMBAYARAN / FORM KONFIRMASI
    public function sewa($id) {
        $data['judul'] = 'Konfirmasi Pembayaran';
        $data['mobil'] = $this->model('mobil_model')->getMobilById($id);
        $data['pelanggan'] = $this->model('pelanggan_model')->getAllPelanggan();
        
        $this->view('templates/header', $data);
        $this->view('transaksi/sewa', $data); // Membuka file form pembayaran
        $this->view('templates/footer');
    }

    // PROSES SIMPAN (Dipanggil hanya saat tombol di Form diklik)
    public function proses_sewa() {
        if( $this->model('transaksi_model')->tambahDataTransaksi($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/transaksi');
            exit;
        }
    }
}