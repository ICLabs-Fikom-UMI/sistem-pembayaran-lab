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

    
    public function detail($id)
    {
        $data['title'] = 'Tambah Data Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->tampilById($id);
        $data['matkul_select'] = $this->model('Select_matkul_model')->tampilById($id);
        
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('Datamahasiswa/detail', $data);
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }
}