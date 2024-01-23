<?php

class Beranda extends Controller {
    public function index()
    {
        $data['title'] = 'Beranda';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('Beranda/index');
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }
}