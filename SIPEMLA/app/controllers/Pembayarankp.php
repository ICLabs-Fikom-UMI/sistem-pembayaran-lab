<?php

class Pembayarankp extends Controller {
    public function index()
    {
        $data['title'] = 'Pembayaran';
        $data['pembayaran'] = $this->model('Pembayaran_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/sidebarkp');
        $this->view('Pembayarankp/index', $data);
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }
}