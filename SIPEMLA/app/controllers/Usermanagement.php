<?php

class Usermanagement extends Controller {
    public function index()
    {
        $data['title'] = 'User Management';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('Usermanagement/index');
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }
}