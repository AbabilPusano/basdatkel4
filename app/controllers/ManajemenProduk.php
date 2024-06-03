<?php 

class ManajemenProduk extends Controller{
    public function index()
    {
        $data['judul'] = 'Manajemen Produk';
        $data['produk'] = $this->model('ProdukModel')->getAllProduk();

        $this->view('templates/header', $data);
        $this->view('manajemenproduk/index', $data);
        $this->view('templates/footer');
    }
    
    public function detail($id)
    {
        $data['judul'] = 'Detail Produk';
        $data['mhs'] = $this->model('TransaksiModel')->getProdukById($id);
        $this->view('templates/header', $data);
        $this->view('manajemenproduk/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('ProdukModel')->tambahDataProduk($_POST) >0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/manajemenproduk');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/manajemenproduk');
            exit;
        }
    }
}