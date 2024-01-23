<?php

class Home extends Controller {
    public function index()
    {
        $data['title'] = 'Home';

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('Home/index');
        $this->view('templates/footer');
    }
}