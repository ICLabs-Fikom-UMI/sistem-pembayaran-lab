<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/pembayaran.css">
<div class="container-usermanagement1">
    <div class="container-btn mt-3 ">
        <a class="btn-logout btn-sm" href="http://localhost/SIPEMLA/" role="button" onclick="return confirm('Anda Yakin Ingin Keluar')">Logout</a>
    </div>
    <div class="mt-5 ms-3 mb-2">
        <h5>Pembayaran</h5>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div>
        <div class="container-user col-11 mx-auto">
            <div class="container-btn-add mb-3">
                <button class="btn-add add-pembayaran" type="submit" data-bs-toggle="modal" data-bs-target="#formPembayaran"><img src="<?= BASEURL ?>/assets/img/add.png" alt="">add</button>
            </div>
            <div style="max-height: 75vh; overflow-x: hidden; overflow-y: scroll;">
                <table id="myTable" class="table table-bordered table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Stambuk</th>
                            <th>Waktu Pembayaran</th>
                            <th>Nominal</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($data['pembayaran'] as $pmb) :
                            $no++;
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $pmb['stambuk']; ?></td>
                                <td><?= $pmb['waktupembayaran']; ?></td>
                                <td>Rp. <?= $pmb['nominal']; ?></td>
                                <td><?= $pmb['status']; ?></td>
                                <td>
                                    <a class="btn-edit edit-pembayaran" role="button" href="<?= BASEURL; ?>/Pembayaran/editTampil/<?= $pmb['idpembayaran'] ?>" data-bs-toggle="modal" data-bs-target="#formPembayaran" data-id="<?= $pmb['idpembayaran']; ?>"><img src="<?= BASEURL ?>/assets/img/edit.png" alt="icon-edit"></a>
                                    <a class="btn-delete" role="button" href="<?= BASEURL; ?>/Pembayaran/hapus/<?= $pmb['idpembayaran'] ?>" onclick="return confirm('Anda Yakin Ingin Hapus')"><img src="<?= BASEURL ?>/assets/img/delete.png" alt="icon-delete"></a>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- Modal Edit Tambah-->
<div class="modal fade" id="formPembayaran" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModalLabel">Tambah Pembayaran</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/Pembayaran/tambah" method="post">
                    <input type="hidden" id="hidden-idpembayaran" name="idpembayaran">
                    <input type="hidden" name="iduser" value="1">
                    <div class="mb-3">
                        <label for="kode-stambuk" class="form-label">Stambuk</label>
                        <input type="number" class="form-control input-stambuk" id="input-stambuk" name="stambuk" placeholder="Masukkan Stambuk">
                    </div>
                    <div class="mb-3">
                        <label for="waktu pembayaran" class="form-label">Waktu Pembayaran</label>
                        <input type="date" class="form-control input-waktupembayaran" id="input-waktupembayaran" name="waktupembayaran" placeholder="Masukkan Waktu Pembayaran">
                    </div>
                    <div class="mb-3">
                        <label for="nominal" class="form-label">Nominal</label>
                        <input type="number" class="form-control input-nominal" id="input-nominal" name="nominal" placeholder="Masukkan nominal">
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status" id="input-status">
                            <option selected>Pilih Status</option>
                            <option value="Lunas">Lunas</option>
                            <option value="Belum Lunas">Belum Lunas</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer modal-pembayaran">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>