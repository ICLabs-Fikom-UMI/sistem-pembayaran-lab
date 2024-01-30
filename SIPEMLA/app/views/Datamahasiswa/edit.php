<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/datamahasiswa.css">
<div class="container-usermanagement1">
    <div class=" row mt-5 ms-3 mb-5 ">
        <div class="col-12 d-flex justify-content-between">
            <h5>Edit Data Mahasiswa</h5>
            <div class="me-5">
                <form action="<?= BASEURL; ?>/Datamahasiswa/editMahasiswa" method="post">
                    <a href="<?= BASEURL; ?>/Datamahasiswa" type="button" class="btn btn-danger me-2" role="button">Batal</a>
                    <button href="<?= BASEURL; ?>/Datamahasiswa" type="submit" class="btn btn-primary me-5">Edit Data</button>
            </div>
        </div>
    </div>

    <div style="max-height: 75vh; overflow-x: hidden; overflow-y: scroll;">
        <div class="container-user rounded">
            <div class="row justify-content-center">

                <div class="col-8">
                    <input type="hidden" name="old_stambuk" value="<?= $data['mahasiswa']['stambuk']; ?>">
                    <div class="mb-3 d-flex">
                        <label for="kode-stambuk" class="form-label col-4">Stambuk</label>
                        <input type="text" class="form-control input-stambuk" id="input-stambuk" name="stambuk" placeholder="Masukkan Stambuk" value="<?= $data['mahasiswa']['stambuk']; ?>">
                    </div>
                    <div class="mb-3 d-flex">
                        <label for="nama" class="form-label col-4">Nama</label>
                        <input type="text" class="form-control input-nama" id="input-nama" name="nama" placeholder="Masukkan Nama" value="<?= $data['mahasiswa']['nama']; ?>">
                    </div>
                    <div class="mb-3 d-flex">
                        <label for="sks" class="form-label col-4">Kelas</label>
                        <select class="form-select" aria-label="Default select example" name="idkelas">
                            <option selected disabled>Pilih Kelas</option>
                            <?php foreach ($data['kelas'] as $kls) :
                                if ($kls['idkelas'] == $data['mahasiswa']['idkelas']) : ?>
                                    <option value="<?= $kls['idkelas']; ?>" selected><?= $kls['namekelas']; ?></option>
                                <?php else : ?>
                                    <option value="<?= $kls['idkelas']; ?>"><?= $kls['namekelas']; ?></option>
                            <?php endif;
                            endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3 d-flex">
                        <label for="prodi" class="form-label col-4">Prodi</label>
                        <select class="form-select" aria-label="Default select example" name="prodi">
                            <option selected disabled>Pilih Prodi</option>
                            <option value="Teknik Informatika" <?php if ($data['mahasiswa']['prodi'] == "Teknik Informatika") echo "selected"; ?>>Teknik Informatika</option>
                            <option value="Sistem Informasi" <?php if ($data['mahasiswa']['prodi'] == "Sistem Informasi") echo "selected"; ?>>Sistem Informasi</option>
                        </select>
                    </div>
                    <div class="mb-3 d-flex">
                        <label for="sks" class="form-label col-4">Mata Kuliah</label>
                        <div>
                            <?php foreach ($data['matkul'] as $matkul) : ?>
                                <?php $isChecked = false; ?>
                                <?php foreach ($data['matkul_select'] as $select) : ?>
                                    <?php if ($matkul["kodematakuliah"] == $select["kodematakuliah"]) : ?>
                                        <?php $isChecked = true; ?>
                                        <div class="form-check">
                                            <input class="form-check-input" name="kodematakuliah[]" type="checkbox" value="<?= $matkul['kodematakuliah']; ?>" id="flexCheckDefault" checked>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <?= $matkul['namamatakuliah']; ?>
                                            </label>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <?php if (!$isChecked) : ?>
                                    <div class="form-check">
                                        <input class="form-check-input" name="kodematakuliah[]" type="checkbox" value="<?= $matkul['kodematakuliah']; ?>" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <?= $matkul['namamatakuliah']; ?>
                                        </label>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

</div>