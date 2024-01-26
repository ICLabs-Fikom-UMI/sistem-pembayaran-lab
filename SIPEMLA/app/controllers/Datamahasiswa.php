<?php

class Datamahasiswa extends Controller {
    public function index()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('Datamahasiswa/index', $data);
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }
}