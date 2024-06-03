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
}