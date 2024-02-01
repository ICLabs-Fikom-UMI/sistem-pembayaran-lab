<?php

class Matakuliahkp extends Controller {
    public function index()
    {
        if($_SESSION['role'] == 'Kepala Lab'){
            $data['title'] = 'Mata Kuliah';
            $data['matkul'] = $this->model('Matkul_model')->tampil();
    
            $this->view('templates/header', $data);
            $this->view('templates/sidebarkp');
            $this->view('Matakuliahkp/index', $data);
            $this->view('templates/footersidebar');
            $this->view('templates/footer');
        }else{
            header("Location:" . BASEURL . "/Beranda");
            exit();
        }
    }
}