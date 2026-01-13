<?php 

class pelanggan_model {
    private $table = 'pelanggan';
    private $db;

    public function __construct() {
        // Menghubungkan ke database project_rental mobil
        $this->db = new Database;
    }

    public function getAllPelanggan() {
        // Mengambil semua data dari tabel pelanggan yang kamu isi di XAMPP
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getPelangganById($id) {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id_pelanggan=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}