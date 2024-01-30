<?php

class Pembayaran extends Controller {
    public function index()
    {
        $data['title'] = 'Pembayaran';
        $data['pembayaran'] = $this->model('Pembayaran_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('Pembayaran/index', $data);
        $this->view('templates/footersidebar');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        
        if ($this->model('Pembayaran_model')->tambah($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Pembayaran');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Pembayaran');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Pembayaran_model')->hapus($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Pembayaran');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Pembayaran');
            exit;
        }
    }

    public function editTampil()
    {
        echo json_encode($this->model('Pembayaran_model')->tampilById($_POST['id']));
    }

    public function editPembayaran(){
        if ($this->model('Pembayaran_model')->edit($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Pembayaran');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Pembayaran');
            exit;
        }
    }

}