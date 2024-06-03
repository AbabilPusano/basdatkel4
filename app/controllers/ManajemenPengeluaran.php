<?php 

class ManajemenPengeluaran extends Controller {
    public function index()
    {
        $data['judul'] = 'Manajemen Produk';
        $data['exp'] = $this->model('PengeluaranModel')->getAllExpense();

        $this->view('templates/header', $data);
        $this->view('manajemenpengeluaran/index', $data);
        $this->view('templates/footer');
    }
}