<?php 

class TransaksiModel {
    private $table = 'transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllNama()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getTransaksiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kode_pesanan=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataTransaksi($data)
    {
        $query = "INSERT INTO transaksi (kode_pesanan, nama_pelanggan, jumlah_transaksi, total_harga, pesanan, waktu_masuk, waktu_diterima, status_pesanan)
        VALUES ('TRX' || to_char(current_date, 'YYYYMMDD') || lpad(nextval('unique_id_seq')::text, 3, '0'), :nama, :jml, :harga, :pesanan, :masuk, :terima, 2);";
        
        $kodePesanan = 'TRX' || to_char(current_date, 'YYYYMMDD') || lpad(nextval('unique_id_seq')::text, 3, '0');

        $this->db->query($query);
        // $this->db->bind('kode', $kodePesanan); 
        $this->db->bind('nama', $data['namapemesan']);
        $this->db->bind('jml', $data['jml']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('pesanan', $data['barangpesanan']);
        $this->db->bind('masuk', $data['dipesan']);
        $this->db->bind('terima', $data['diterima']);
        // $this->db->bind('status', 2); 

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataTransaksi($id)
    {
        $query = "DELETE FROM transaksi WHERE kode_pesanan = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataTransaksi($data)
    {
        $query = 'UPDATE transaksi SET
                    nama_pelanggan = :nama,
                    pesanan = :pesanan,
                    jumlah_transaksi = :jml,
                    waktu_masuk = :masuk,
                    waktu_diterima = :waktu_diterima,
                    total_harga = :total_harga
                WHERE kode_pesanan = :id';
        
        $this->db->query($query);
        $this->db->bind('nama', $data['namapemesan']);
        $this->db->bind('pesanan', $data['barangpesanan']);
        $this->db->bind('jml', $data['jml']);
        $this->db->bind('masuk', $data['dipesan']);
        $this->db->bind('total_harga', $data['harga']);
        $this->db->bind('waktu_diterima', $data['diterima']);
        $this->db->bind('id', $data['id']);

        echo $data;

        $this->db->execute();

        return $this->db->rowCount();
    }


}