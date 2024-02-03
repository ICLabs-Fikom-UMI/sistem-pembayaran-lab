<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/datamahasiswakp.css">
<div class="container-usermanagement1">
    <div class="container-btn mt-3 ">
        <a class="btn-logout btn-sm" href="<?= BASEURL ?>/Login/keluar" role="button" onclick="return confirm('Anda Yakin Ingin Keluar')">Logout</a>
    </div>
    <div class="mt-3 ms-3 mb-5">
        <h5>Data Mahasiswa</h5>
    </div>
    <div>
        <div class="container-user col-12 mx-auto mt-5">
            <div class="overflow-y-auto p-4" style="max-height: 75vh;">
                <div class="overflow-x-auto rounded-4 shadow-lg p-3" style="min-width: 750px;">
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

</div>