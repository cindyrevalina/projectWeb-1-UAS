<?php

class mobil_model {
    private $table = 'kendaraan';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMobil() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMobilById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_mobil=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMobil($data) {
        $query = "INSERT INTO kendaraan (nama_mobil, nopol, harga_sewa, foto) 
                  VALUES (:nama, :nopol, :harga, :foto)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama_mobil']);
        $this->db->bind('nopol', $data['nopol']);
        $this->db->bind('harga', $data['harga_sewa']);
        $this->db->bind('foto', $data['foto']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataMobil($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_mobil=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataMobil($data) {
        $query = "UPDATE kendaraan SET 
                    nama_mobil = :nama, 
                    nopol = :nopol, 
                    harga_sewa = :harga, 
                    foto = :foto 
                  WHERE id_mobil = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama_mobil']);
        $this->db->bind('nopol', $data['nopol']);
        $this->db->bind('harga', $data['harga_sewa']);
        $this->db->bind('foto', $data['foto']);
        $this->db->bind('id', $data['id_mobil']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}