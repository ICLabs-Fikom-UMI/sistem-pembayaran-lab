<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/datamahasiswa.css">
<div class="container-usermanagement1">
    <div class="mt-5 ms-4 mb-2">
        <h5>Data Mahasiswa</h5>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div>
        <div class="container-user rounded col-12 mx-auto">
            <div class="container-btn-add me-5">
                <button class="btn-add" type="submit" data-bs-toggle="modal" data-bs-target="#formMahasiswa"><img src="<?= BASEURL ?>/assets/img/add.png" alt="">add</button>
            </div>
            <div class="overflow-y-auto p-4" style="max-height: 73vh;">
                <div class="overflow-x-auto rounded-4 shadow-lg p-4" style="min-width: 750px;">
                    <table id="myTable" class="table table-bordered table-striped " style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Stambuk</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($data['mahasiswa'] as $mhs) :
                                $no++;
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $mhs['stambuk']; ?></td>
                                    <td><?= $mhs['nama']; ?></td>
                                    <td><?= $mhs['namekelas']; ?></td>
                                    <td>
                                        <a class="btn-edit" role="button" href="<?= BASEURL; ?>/Datamahasiswa/editTampil/<?= $mhs['stambuk'] ?>"><img src="<?= BASEURL ?>/assets/img/edit.png" alt="icon-edit"></a>
                                        <a class="btn-delete ms-1" role="button" href="<?= BASEURL; ?>/Datamahasiswa/hapus/<?= $mhs['stambuk'] ?>" onclick="return confirm('Anda Yakin Ingin Hapus')"><img src="<?= BASEURL ?>/assets/img/delete.png" alt="icon-delete"></a>
                                        <a class="btn-detail text-decoration-none ms-1" role="button" href="<?= BASEURL; ?>/Datamahasiswa/detail/<?= $mhs['stambuk'] ?>"><img src="<?= BASEURL ?>/assets/img/detail.png" alt="icon-detail"></a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal Edit Tambah-->
<div class="modal fade" id="formMahasiswa" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModalLabel">Detail Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/Datamahasiswa/tambah" method="post">
                    <div class="mb-3">
                        <label for="kode-stambuk" class="form-label">Stambuk</label>
                        <input type="text" class="form-control input-stambuk" id="input-stambuk" name="stambuk" placeholder="Masukkan Stambuk">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control input-nama" id="input-nama" name="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3">
                        <label for="sks" class="form-label">Kelas</label>
                        <select class="form-select" aria-label="Default select example" name="idkelas">
                            <option selected>Pilih Kelas</option>
                            <?php
                            foreach ($data['kelas'] as $kls) :
                            ?>
                                <option value="<?= $kls['idkelas']; ?>"><?= $kls['namekelas']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Prodi</label>
                        <select class="form-select" aria-label="Default select example" name="prodi">
                            <option selected>Pilih Prodi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="sks" class="form-label">Mata Kuliah</label>
                        <?php
                        foreach ($data['matkul'] as $matkul) :
                        ?>
                            <div class="form-check">
                                <input class="form-check-input" name="kodematakuliah[]" type="checkbox" value="<?= $matkul['kodematakuliah']; ?>" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <?= $matkul['namamatakuliah']; ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
            </div>
            <div class="modal-footer modal-matkul">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Add Data</button>
                </form>
            </div>
        </div>
    </div>
</div>