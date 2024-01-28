<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/datamahasiswa.css">
<div class="container-usermanagement1">
    <div class=" row mt-5 ms-3 mb-5 ">
        <div class="col-12 d-flex justify-content-between">
            <h5>Detail Data Mahasiswa</h5>
            <a href="<?= BASEURL; ?>/Datamahasiswa" type="button" class="btn btn-primary" role="button">Back</a>
        </div>
    </div>

    <div style="max-height: 80vh; overflow-x: hidden; overflow-y: scroll;" class="">
        <div class="container-user rounded mt">
            <div class="row justify-content-center">

                <div class="col-8" >
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
                        <div class="mb-3 d-flex">
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
                        <div class="mb-3 d-flex">
                            <label for="disabledTextInput" class="form-label col-4">Jumlah SKS Praktikum</label>
                            <div class="col-2">
                                <input type="text" id="disabledTextInput" class="form-control" value="<?= $sks; ?>">
                            </div>
                        </div>

                    </fieldset>
                </div>
            </div>
        </div>
    </div>

</div>