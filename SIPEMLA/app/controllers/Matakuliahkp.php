<?php

class Matakuliahkp extends Controller {
    public function index()
    {
        $data['title'] = 'Mata Kuliah';

        $this->view('templates/header', $data);
        $this->view('templates/sidebarkp');
        $this->view('Matakuliahkp/index');
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }
}