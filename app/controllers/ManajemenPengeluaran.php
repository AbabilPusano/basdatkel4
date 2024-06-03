<?php 

class ManajemenPengeluaran extends Controller {
    public function index()
    {
        $data['judul'] = 'Manajemen Produk';

        $this->view('templates/header', $data);
        $this->view('manajemenpengeluaran/index', $data);
        $this->view('templates/footer');
    }
}