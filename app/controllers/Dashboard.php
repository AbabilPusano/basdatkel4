<?php 

class Dashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['nama'] = $this->model('TransaksiModel')->getAllNama();
        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }
}