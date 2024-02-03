<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/datamahasiswakp.css">
<div class="container-usermanagement1">
    <div class="container-btn mt-3 ">
        <a class="btn-logout btn-sm" href="<?= BASEURL ?>/Login/keluar" role="button" onclick="return confirm('Anda Yakin Ingin Keluar')">Logout</a>
    </div>
    <div class="mt-3 ms-3 mb-5">
        <h5>Data Mahasiswa</h5>
    </div>
    <div>
        <div class="container-user rounded col-11 mx-auto mt-5">
            <div style="max-height: 75vh; overflow-x: hidden; overflow-y: scroll; box-shadow: 5px 5px 10px #888888; padding: 20px; border-radius: 5px;">
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
                                    <a style="text-decoration: none;" class="btn-detail detail-mahasiswa" role="button" href="<?= BASEURL; ?>/Datamahasiswakp/detailkp/<?= $mhs['stambuk'] ?>">Detail</a>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>