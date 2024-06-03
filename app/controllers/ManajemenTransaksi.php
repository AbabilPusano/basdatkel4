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

    public function tambah()
    {
        if( $this->model('TransaksiModel')->tambahDataTransaksi($_POST) >0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/manajementransaksi');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/manajementransaksi');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('TransaksiModel')->hapusDataTransaksi($id) >0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/manajementransaksi');
            exit;
        }else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/manajementransaksi');
            exit;
        }
    }
}