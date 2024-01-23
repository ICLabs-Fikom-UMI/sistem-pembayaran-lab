<?php

class Matakuliah extends Controller {
    public function index()
    {
        $data['title'] = 'Mata Kuliah';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('Matakuliah/index');
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }
}