<!-- <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/Home.css" /> -->
<div class="container-home" style="overflow-x: hidden;">
    <div class=" row mt-5 mb-2 justify-content-center">
        <div class="col-10 d-flex justify-content-between">
            <h5>Detail Data Mahasiswa</h5>
            <a href="<?= BASEURL; ?>/Home" type="button" class="btn btn-primary" role="button">Back</a>
        </div>
    </div>

    <div style="max-height: 75vh; overflow-x: hidden; overflow-y: scroll;">
        <div class="container-user rounded">
            <div class="row justify-content-center">

                <div class="col-6">
                    <fieldset disabled>
                        <div class="mb-3 d-flex">
                            <label for="disabledTextInput" class="form-label col-4">Stambuk Mahasiswa</label>
                            <input type="text" id="disabledTextInput" class="form-control" value="<?= $data['mahasiswa']['stambuk']; ?>">
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
                            <label for="disabledTextInput" class="form-label col-4">Nominal Pembayaran</label>
                            <div class="col-4">
                                <input type="text" id="disabledTextInput" class="form-control" value="Rp. <?=$data['pembayaran']['nominal']; ?>">
                            </div>
                        </div>
                        <div class="mt-3 d-flex">
                            <label for="disabledTextInput" class="form-label col-4">Status Pembayaran</label>
                            <div class="col-4">
                                <input type="text" id="disabledTextInput" class="form-control" value="Rp. <?=$data['pembayaran']['status']; ?>">
                            </div>
                        </div>

                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>