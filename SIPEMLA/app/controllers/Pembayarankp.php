<?php

class Pembayarankp extends Controller {
    public function index()
    {
        $data['title'] = 'Pembayaran';

        $this->view('templates/header', $data);
        $this->view('templates/sidebarkp');
        $this->view('Pembayarankp/index');
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }
}