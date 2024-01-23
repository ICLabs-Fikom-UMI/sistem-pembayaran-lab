<?php

class Pembayaran extends Controller {
    public function index()
    {
        $data['title'] = 'Pembayaran';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('Pembayaran/index');
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }
}