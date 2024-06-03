<?php 

class ProdukModel {
    private $table = 'produk';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProduk()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getProdukById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataProduk($data)
    {
        $query = 'INSERT INTO produk ("nama_produk", "harga", "deskripsi", "gambar")
                    VALUES
                    (:nama, :harga, :deskripsi, :gambar)';
        
        $this->db->query($query);
        $this->db->bind('nama', $data['namaproduk']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('gambar', $data['gambarfile']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataProduk($id)
    {
        $query = "DELETE FROM produk WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}