<?php 

class ManajemenPengeluaran extends Controller {
    public function index()
    {
        $data['judul'] = 'Manajemen Pengeluaran';
        $data['exp'] = $this->model('PengeluaranModel')->getAllExpense();

        $this->view('templates/header', $data);
        $this->view('manajemenpengeluaran/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('PengeluaranModel')->tambahDataPengeluaran($_POST) >0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/manajemenpengeluaran');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/manajemenpengeluaran');
            exit;
        }
    }
}