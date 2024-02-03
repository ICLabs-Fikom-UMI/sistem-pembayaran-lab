<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/check.css" />
<div class="container-home" style="overflow-x: hidden;">
    <div class=" row mt-5 mb-2 justify-content-center">
        <div class="col-10 d-flex justify-content-between">
            <h5>Detail Data Mahasiswa</h5>
            <a href="<?= BASEURL; ?>/Home" type="button" class="btn btn-primary" role="button">Back</a>
        </div>
    </div>

    <div class="container-check overflow-y-auto" style="max-height: 75vh;">
        <div class="container p-4">
            <div class="row rounded-4 shadow-lg">

                <div class="col-12 col-md-8 mt-4 mb-3 mx-auto">
                    <fieldset disabled>
                        <div class="mb-3 d-flex">
                            <label for="disabledTextInput" class="form-label col-4">Stambuk Mahasiswa</label>
                            <input type="text" id="disabledTextInput" class="form-control shadow" value="<?= $data['mahasiswa']['stambuk']; ?>">
                        </div>
                        <div class="mb-3 d-flex">
                            <label for="disabledTextInput" class="form-label col-4">Nama Mahasiswa</label>
                            <input type="text" id="disabledTextInput" class="form-control" value="<?= $data['mahasiswa']['nama']; ?>">
                        </div>
                        <div class="mb-3 d-flex">
                            <label for="disabledTextInput" class="form-label col-4">Kelas Mahasiswa</label>
                            <input type="text" id="disabledTextInput" class="form-control" value="<?= $data['mahasiswa']['namekelas']; ?>">
                        </div>
                        <div class="mb-3 d-flex">
                            <label for="disabledTextInput" class="form-label col-4">Prodi Mahasiswa</label>
                            <input type="text" id="disabledTextInput" class="form-control" value="<?= $data['mahasiswa']['prodi']; ?>">
                        </div>
                        <div class="mb-1 d-flex">
                            <label for="disabledTextInput" class="form-label col-4">Mata Kuliah</label>
                            <div class="col-6">

                                <?php
                                $sks = 0;
                                foreach ($data['matkul_select'] as $matkul) :
                                    $sks++;
                                ?>

                                    <input type="text" id="disabledTextInput" class="form-control mb-3" value="• <?= $matkul['namamatakuliah']; ?>">

                                <?php endforeach; ?>

                            </div>
                        </div>
                        <div class="mb-2 d-flex">
                            <label for="disabledTextInput" class="form-label col-4">Waktu Pembayaran</label>
                            <div class="col-4">
                                <input type="text" id="disabledTextInput" class="form-control" value="<?= $data['pembayaran']['waktupembayaran']; ?>">
                            </div>
                        </div>
                        <div class="mb-2 d-flex">
                            <label for="disabledTextInput" class="form-label col-4">Nominal Pembayaran</label>
                            <div class="col-4">
                                <input type="text" id="disabledTextInput" class="form-control" value="Rp. <?= $data['pembayaran']['nominal']; ?>">
                            </div>
                        </div>
                        <div class="mt-3 d-flex">
                            <label for="disabledTextInput" class="form-label col-4">Status Pembayaran</label>
                            <div class="col-4">
                                <input type="text" id="disabledTextInput" class="form-control" value="<?= $data['pembayaran']['status']; ?>">
                            </div>
                        </div>

                    </fieldset>
                </div>
            </div>
            <div class="mt-5 p-4 rounded-4 shadow-lg" >
                <h5 class="mb-4">Riwayat Pembayaran</h5>
                <div class="overflow-x-scroll">
                    <table id="myTable" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Stambuk</th>
                                <th>Waktu Pembayaran</th>
                                <th>Nominal</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($data['pmb'] as $pmb) :
                                $no++;
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $pmb['stambuk']; ?></td>
                                    <td><?= $pmb['waktupembayaran']; ?></td>
                                    <td>Rp. <?= $pmb['nominal']; ?></td>
                                    <td><?= $pmb['status']; ?></td>
                                </tr>
        
                            <?php endforeach; ?>
        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>