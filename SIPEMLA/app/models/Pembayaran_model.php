<?php

class Pembayaran_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambah($data)
    {
        $query = "INSERT INTO pembayaran VALUES('', :iduser, :stambuk, :waktupembayaran, :nominal, :status)";

        $this->db->query($query);
        $this->db->bind('iduser', $data['iduser']);
        $this->db->bind('stambuk', $data['stambuk']);
        $this->db->bind('waktupembayaran', $data['waktupembayaran']);
        $this->db->bind('nominal', $data['nominal']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tampil()
    {
        $this->db->query("SELECT * FROM pembayaran ORDER BY idpembayaran ASC");
        return $this->db->resultSet();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM pembayaran WHERE idpembayaran = :idpembayaran";
        $this->db->query($query);
        $this->db->bind('idpembayaran', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tampilById($id)
    {
        $this->db->query("SELECT * FROM pembayaran WHERE idpembayaran= :idpembayaran");
        $this->db->bind('idpembayaran', $id);
        return $this->db->single();
    }

    public function tampilByStambuk($stambuk)
    {
        $this->db->query("SELECT * FROM pembayaran WHERE stambuk= :stambuk ORDER BY idpembayaran DESC");
        $this->db->bind('stambuk', $stambuk);
        return $this->db->single();
    }

    public function tampilByStambuk_pmb($stambuk)
    {
        $this->db->query("SELECT * FROM pembayaran WHERE stambuk= :stambuk");
        $this->db->bind('stambuk', $stambuk);
        return $this->db->resultSet();
    }

    public function edit($data)
    {
        $query = "UPDATE pembayaran SET stambuk= :stambuk, waktupembayaran= :waktupembayaran, nominal= :nominal, status= :status WHERE idpembayaran= :idpembayaran";
        $this->db->query($query);
        $this->db->bind('stambuk', $data['stambuk']);
        $this->db->bind('waktupembayaran', $data['waktupembayaran']);
        $this->db->bind('nominal', $data['nominal']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('idpembayaran', $data['idpembayaran']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
