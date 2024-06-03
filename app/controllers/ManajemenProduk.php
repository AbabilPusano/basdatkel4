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

    public function hapus($id)
    {
        if( $this->model('ProdukModel')->hapusDataProduk($id) >0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/manajemenproduk');
            exit;
        }else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/manajemenproduk');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('ProdukModel')->getProdukById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('ProdukModel')->ubahDataProduk($_POST) >0 ){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/manajemenproduk');
            exit;
        }else{
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/manajemenproduk');
            exit;
        }
    }
}