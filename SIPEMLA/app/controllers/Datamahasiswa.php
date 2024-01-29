<?php

class Datamahasiswa extends Controller {
    public function index()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->tampil();
        $data['matkul'] = $this->model('Matkul_model')->tampil();
        $data['kelas'] = $this->model('Kelas_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('Datamahasiswa/index', $data);
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }

    
    public function detail($id)
    {
        $data['title'] = 'Detail Data Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->tampilById($id);
        $data['matkul_select'] = $this->model('Select_matkul_model')->tampilById($id);
        
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('Datamahasiswa/detail', $data);
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        
        if ($this->model('Mahasiswa_model')->tambah($_POST) > 0) {
            $this->model('Select_matkul_model')->tambah($_POST);
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Datamahasiswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Datamahasiswa');
            exit;
        }
    }

}