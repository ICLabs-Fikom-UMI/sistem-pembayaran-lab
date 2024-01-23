<?php

class Datamahasiswakp extends Controller {
    public function index()
    {
        $data['title'] = 'Data Mahasiswa';

        $this->view('templates/header', $data);
        $this->view('templates/sidebarkp');
        $this->view('Datamahasiswakp/index');
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }
}