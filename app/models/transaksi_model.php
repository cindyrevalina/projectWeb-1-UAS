<?php

class transaksi_model {
    private $table = 'transaksi';
    private $db;

    public function __construct() {
        // Membuat koneksi ke database melalui core Database.php
        $this->db = new Database;
    }

    public function getAllTransaksi() {
        /** * Mengambil data transaksi beserta nama mobil dan nama pelanggan menggunakan JOIN
         */
        $query = "SELECT transaksi.*, kendaraan.nama_mobil, pelanggan.nama_pelanggan 
                  FROM " . $this->table . "
                  JOIN kendaraan ON transaksi.id_mobil = kendaraan.id_mobil
                  JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan";
        
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function tambahDataTransaksi($data) {
        // Query untuk memasukkan data sewa baru ke tabel transaksi
        $query = "INSERT INTO transaksi (id_pelanggan, id_mobil, tgl_sewa, tgl_kembali, metode_pembayaran, total_bayar, status) 
                  VALUES (:id_p, :id_m, :tgl_s, :tgl_k, :metode, :total, 'Proses')";
        
        $this->db->query($query);
        
        // Bind data agar aman dari SQL Injection
        $this->db->bind('id_p', $data['id_pelanggan']);
        $this->db->bind('id_m', $data['id_mobil']);
        $this->db->bind('tgl_s', $data['tgl_sewa']);
        $this->db->bind('tgl_k', $data['tgl_kembali']);
        $this->db->bind('metode', $data['metode_pembayaran']);
        $this->db->bind('total', $data['total_bayar']);

        $this->db->execute();
        return $this->db->rowCount();
    }
} // <--- PASTIKAN KURUNG TUTUP INI ADA DI PALING BAWAH