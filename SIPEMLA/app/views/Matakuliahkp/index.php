<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/matakuliahkp.css">
<div class="container-usermanagement1">
    <div class="mt-5 ms-4 mb-5">
        <h5>Mata Kuliah</h5>
    </div>
    <div>
        <div class="container-user col-12 mx-auto">
            <div class="overflow-y-auto p-4" style="max-height: 75vh;">
                <div class="overflow-x-auto rounded-4 shadow-lg p-3" style="min-width: 750px;">
                    <table id="myTable" class="table table-bordered table-striped " style="width:100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>SKS</th>
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
                                </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>