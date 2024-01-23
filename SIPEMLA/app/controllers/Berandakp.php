<?php

class Berandakp extends Controller {
    public function index()
    {
        $data['title'] = 'Beranda';

        $this->view('templates/header', $data);
        $this->view('templates/sidebarkp');
        $this->view('Berandakp/index');
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }
}