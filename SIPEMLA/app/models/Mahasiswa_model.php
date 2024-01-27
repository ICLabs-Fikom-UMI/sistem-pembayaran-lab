<?php

class Mahasiswa_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambah($data)
    {
        $query = "INSERT INTO matakuliah VALUES(:kodematakuliah, :namamatakuliah, :sks)";

        $this->db->query($query);
        $this->db->bind('kodematakuliah', $data['kodematakuliah']);
        $this->db->bind('namamatakuliah', $data['namamatakuliah']);
        $this->db->bind('sks', $data['sks']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tampil()
    {
        $this->db->query("SELECT stambuk, nama, prodi, kelas.namekelas FROM mahasiswa JOIN kelas ON mahasiswa.idkelas = kelas.idkelas;");
        return $this->db->resultSet();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM matakuliah WHERE kodematakuliah = :kodematakuliah";
        $this->db->query($query);
        $this->db->bind('kodematakuliah', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tampilById($id)
    {
        $this->db->query("SELECT stambuk, nama, prodi, kelas.namekelas FROM mahasiswa JOIN kelas ON mahasiswa.idkelas = kelas.idkelas WHERE stambuk = :stambuk;");
        $this->db->bind('stambuk', $id);
        return $this->db->single();
    }

    public function edit($data)
    {
        $query = "UPDATE matakuliah SET kodematakuliah= :kodematakuliah, namamatakuliah= :namamatakuliah, sks= :sks WHERE kodematakuliah= :old_kodematakuliah";
        $this->db->query($query);
        $this->db->bind('kodematakuliah', $data['kodematakuliah']);
        $this->db->bind('namamatakuliah', $data['namamatakuliah']);
        $this->db->bind('sks', $data['sks']);
        $this->db->bind('old_kodematakuliah', $data['old_kodematakuliah']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
