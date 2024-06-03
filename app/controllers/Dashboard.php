<?php 

class Dashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['nama'] = $this->model('TransaksiModel')->getAllNama();
        $data['produk'] = $this->model('ProdukModel')->getAllProduk();
        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }
}