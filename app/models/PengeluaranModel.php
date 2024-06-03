<?php 

class PengeluaranModel {
    private $table = 'pengeluaran';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllExpense()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getExpenseById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPengeluaran($data)
    {
        $query = 'INSERT INTO pengeluaran ("nama_pengeluaran", "tanggal", "detail", "harga")
                    VALUES
                    (:nama, :tanggal, :detail, :harga)';
        
        $this->db->query($query);
        $this->db->bind('nama', $data['namapengeluaran']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('detail', $data['detail']);
        $this->db->bind('harga', $data['jml']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}