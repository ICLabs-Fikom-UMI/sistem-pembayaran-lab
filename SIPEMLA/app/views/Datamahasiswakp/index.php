<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/datamahasiswakp.css">
<div class="container-usermanagement1">
    <div class="mt-5 ms-4 mb-5">
        <h5>Data Mahasiswa</h5>
    </div>
    <div>
        <div class="container-user col-12 mx-auto mt-5">
            <div class="overflow-y-auto p-4" style="max-height: 80vh;">
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
                                    <a class="btn-detail text-decoration-none p-2" role="button" href="<?= BASEURL; ?>/Datamahasiswa/detail/<?= $mhs['stambuk'] ?>"><img src="<?= BASEURL ?>/assets/img/detail.png" alt="icon-detail"></a>
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