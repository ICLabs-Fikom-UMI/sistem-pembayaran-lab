<?php
session_start();

class Beranda extends Controller
{
    public function index()
    {
        if(isset($_SESSION['masuk'])){
            if($_SESSION['role'] == 'Admin'){
                $data['title'] = 'Beranda';
        
                $this->view('templates/header', $data);
                $this->view('templates/sidebar');
                $this->view('Beranda/index');
                $this->view('templates/footersidebar');
                $this->view('templates/footer');
            }else{
                header("Location:" . BASEURL . "/Berandakp");
                exit();
            }
        }else{
            header("Location:" . BASEURL . "/Login");
            exit();
        }
    }
}
