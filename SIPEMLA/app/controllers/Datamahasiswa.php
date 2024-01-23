<?php

class Datamahasiswa extends Controller {
    public function index()
    {
        $data['title'] = 'Data Mahasiswa';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('Datamahasiswa/index');
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }
}