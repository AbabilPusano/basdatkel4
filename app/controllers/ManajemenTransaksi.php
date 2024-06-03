<?php 

class ManajemenTransaksi extends Controller{
    public function index()
    {
        $data['judul'] = 'Manajemen Transaksi';
        $data['trx'] = $this->model('TransaksiModel')->getAllNama();

        $this->view('templates/header', $data);
        $this->view('manajementransaksi/index', $data);
        $this->view('templates/footer');
    }
}