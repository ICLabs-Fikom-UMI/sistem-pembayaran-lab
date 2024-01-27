<?php

class Datamahasiswa extends Controller {
    public function index()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->tampil();
        $data['matkul'] = $this->model('Select_matkul_model')->tampil();
        var_dump($data['matkul']);

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
        var_dump($data['matkul_select']);
        
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('Datamahasiswa/detail', $data);
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }
}