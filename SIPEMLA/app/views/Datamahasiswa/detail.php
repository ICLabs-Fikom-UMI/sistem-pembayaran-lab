<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/datamahasiswa.css">
<div class="container-usermanagement1">
    <div class=" row mt-5 ms-3 mb-5 ">
        <div class="col-12 d-flex justify-content-between">
            <h5>Detail Data Mahasiswa</h5>
            <a href="<?= BASEURL; ?>/Datamahasiswa" type="button" class="btn btn-primary" role="button">Back</a>
        </div>
    </div>

    <div>
        <div class="container-user rounded mt-">
            <div class="row justify-content-center">

                <div class="col-6">
                    <fieldset disabled>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Stambuk Mahasiswa</label>
                            <input type="text" id="disabledTextInput" class="form-control" value="<?= $data['mahasiswa']['stambuk']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Nama Mahasiswa</label>
                            <input type="text" id="disabledTextInput" class="form-control" value="<?= $data['mahasiswa']['nama']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Kelas Mahasiswa</label>
                            <input type="text" id="disabledTextInput" class="form-control" value="<?= $data['mahasiswa']['namekelas']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Prodi Mahasiswa</label>
                            <input type="text" id="disabledTextInput" class="form-control" value="<?= $data['mahasiswa']['prodi']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Mata Kuliah</label>
    
                            <?php
                            $sks = 0;
                            foreach ($data['matkul_select'] as $matkul) :
                            ?>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?= $matkul['namamatakuliah']; ?>">
    
                            <?php endforeach; ?>
    
                        </div>
    
                    </fieldset>
                </div>
            </div>
        </div>
    </div>

</div>