<?php
session_start();

class Beranda extends Controller
{
    public function index()
    {
        if (isset($_SESSION['masuk'])) {
            if ($_SESSION['role'] == 'Admin') {
                $data['title'] = 'Beranda';
                $data['mahasiswa'] = $this->model('Mahasiswa_model')->countMahasiswa();
                $data['user'] = $this->model('User_model')->countUser();
                $data['matkul'] = $this->model('Matkul_model')->countMatkul();
                $data['countpembayaran'] = $this->model('Pembayaran_model')->countPembayaran();
                $data['pembayaran'] = $this->model('Pembayaran_model')->tampil();


                $this->view('templates/header', $data);
                $this->view('templates/sidebar');
                $this->view('Beranda/index', $data);
                $this->view('templates/footersidebar');
                $this->view('templates/footer');
            } else {
                header("Location:" . BASEURL . "/Berandakp");
                exit();
            }
        } else {
            header("Location:" . BASEURL . "/Login");
            exit();
        }
    }

    public function printPriode1()
    {
        if ($_SESSION['role'] == 'Admin') {
            $data['title'] = 'Print Priode 1';
            $data['pembayaran'] = $this->model('Pembayaran_model')->tampil();
            $data['countpembayaran'] = $this->model('Pembayaran_model')->countPembayaran();


            $this->view('templates/header', $data);
            // $this->view('templates/sidebar');
            $this->view('Beranda/priode1', $data);
            // $this->view('templates/footersidebar');
            $this->view('templates/footer');
        } else {
            header("Location:" . BASEURL . "/Berandakp");
            exit();
        }
    }
}
