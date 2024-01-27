<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/matakuliah.css">
<div class="container-usermanagement1">
    <div class="container-btn mt-3 ">
        <a class="btn-logout btn-sm" href="http://localhost/SIPEMLA/" role="button" onclick="return confirm('Anda Yakin Ingin Keluar?')">Logout</a>
    </div>
    <div class="mt-3 ms-3 mb-2">
        <h5>Mata Kuliah</h5>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div>
        <div class="container-user">
            <table id="table-matakuliah" class="table table-bordered table-striped mx-auto" style="width:80%;">
                <thead class="no-border" style="border-top-color:white; border-left-color:white; border-right-color:white;">
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="container-btn-add">
                            <!-- <div class="container-btn-add"> -->
                                <button class="btn-add add-matkul mb-3" type="submit" data-bs-toggle="modal" data-bs-target="#formUser"><img src="<?= BASEURL ?>/assets/img/add.png" alt="">add</button>
                            <!-- </div> -->
                        </th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 0;
                    foreach ($data['matkul'] as $matkul) :
                        $no++;
                    ?>

                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $matkul['kodematakuliah']; ?></td>
                            <td><?= $matkul['namamatakuliah']; ?></td>
                            <td><?= $matkul['sks']; ?></td>
                            <td>
                                <a class="btn-edit edit-matkul" role="button" href="<?= BASEURL; ?>/Matakuliah/edit/<?= $matkul['kodematakuliah'] ?>" data-bs-toggle="modal" data-bs-target="#formUser" data-id="<?= $matkul['kodematakuliah']; ?>"><img src="<?= BASEURL ?>/assets/img/edit.png" alt="icon-edit"></a>
                                <a class="btn-delete delete-matkul" role="button" href="<?= BASEURL; ?>/Matakuliah/hapus/<?= $matkul['kodematakuliah'] ?>" onclick="return confirm('Anda Yakin Ingin Hapus')"><img src="<?= BASEURL ?>/assets/img/delete.png" alt="icon-delete"></a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Modal-->
<div class="modal fade" id="formUser" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModalLabel">Tambah Mata Kuliah</h1>
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