<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/datamahasiswa.css">
<div class="container-usermanagement1">
    <div class="container-btn mt-3 ">
        <a class="btn-logout btn-sm" href="http://localhost/SIPEMLA/" role="button" onclick="return confirm('Anda Yakin Ingin Keluar')">Logout</a>
    </div>
    <div class="mt-5 ms-3 mb-5">
        <h5>Data Mahasiswa</h5>
    </div>
    <div class="container-btn-add ">
        <button class="btn-add" type="submit"><img src="<?= BASEURL ?>/assets/img/add.png" alt="">add</button>
    </div>
    <div>
        <div class="container-user rounded mt-">
            <table id="example" class="table table-bordered table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Stambuk</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <!-- <th><?=$data['mahasiswa']['namekelas'];?></th> -->
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
                                <a class="btn-edit" role="button" href="<?= BASEURL; ?>/Datamahasiswa/edit/<?= $mhs['stambuk'] ?>" data-bs-toggle="modal" data-bs-target="#formUser" data-id="<?= $mhs['stambuk']; ?>"><img src="<?= BASEURL ?>/assets/img/edit.png" alt="icon-edit"></a>
                                <a class="btn-delete"><img src="<?= BASEURL ?>/assets/img/delete.png" alt="icon-delete"></a>
                                <a style="text-decoration: none;" class="btn-detail detail-mahasiswa" role="button" href="<?= BASEURL; ?>/Datamahasiswa/detail/<?= $mhs['stambuk'] ?>">Detail</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Modal Edit Tambah-->
<div class="modal fade" id="formDetail" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModalLabel">Detail Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/Matakuliah/tambah" method="post">
                    <input type="hidden" class="id" name="old_kodematakuliah" id="hidden-kodematkul">
                    <div class="mb-3">
                        <label for="kode-mata-kuliah" class="form-label">Kode Mata Kuliah</label>
                        <input type="text" class="form-control input-kodematkul" id="input-kodematkul" name="kodematakuliah" placeholder="Masukkan Kode Mata Kuliah">
                    </div>
                    <div class="mb-3">
                        <label for="M" class="form-label">Nama Mata Kuliah</label>
                        <input type="text" class="form-control input-matkul" id="input-matkul" name="namamatakuliah" placeholder="Masukkan Nama Mata Kuliah">
                    </div>
                    <div class="mb-3">
                        <label for="sks" class="form-label">SKS</label>
                        <input type="number" class="form-control input-sks" id="input-sks" name="sks" placeholder="Masukkan SKS">
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