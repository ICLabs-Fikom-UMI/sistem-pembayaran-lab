<?php

class Home extends Controller {
    public function index()
    {
        $data['title'] = 'Home';

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('Home/index', $data);
        $this->view('templates/footer');
    }

    public function check()
    {
        $data['title'] = 'Check Pembayaran';
        $stambuk = $_POST['stambuk'];
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->tampilById($stambuk);
        $data['matkul_select'] = $this->model('Select_matkul_model')->tampilById($stambuk);
        $data['pembayaran'] =$this->model('Pembayaran_model')->tampilByStambuk($stambuk);
        if($data['pembayaran']>0){
            $data['mahasiswa'];
            $data['matkul_select'];
            $data['pembayaran'];
            $this->view('templates/header', $data);
            $this->view('templates/navbar');
            $this->view('Home/check', $data);
            $this->view('templates/footer');
        }else{
            stambukCek::setFlash('Stambuk', 'Tidak Ditemukan', 'danger');
            header('Location: ' . BASEURL . '/Home');
            exit;
        }
    }
}