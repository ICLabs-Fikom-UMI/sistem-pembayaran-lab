<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/matakuliahkp.css">
<div class="container-usermanagement1">
    <div class="container-btn mt-1 ">
        <a class="btn-logout btn-sm" href="<?= BASEURL ?>/Login/keluar" role="button" onclick="return confirm('Anda Yakin Ingin Keluar')">Logout</a>
    </div>
    <div class="mt-3 ms-3 mb-5">
        <h5>Mata Kuliah</h5>
    </div>
    <div>
        <div class="container-user col-11 mx-auto mt-5">
            <div style="max-height: 75vh; overflow-x: hidden; overflow-y: scroll; box-shadow: 5px 5px 10px #888888; padding: 20px; border-radius: 5px;">
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