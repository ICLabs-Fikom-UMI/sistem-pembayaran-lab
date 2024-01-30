<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/pembayarankp.css">
<div class="container-usermanagement1">
    <div class="container-btn mt-3 ">
        <a class="btn-logout btn-sm" href="http://localhost/SIPEMLA/" role="button" onclick="return confirm('Anda Yakin Ingin Keluar')">Logout</a>
    </div>
    <div class="mt-3 ms-3 mb-5">
        <h5>Pembayaran</h5>
    </div>
    <div>
        <div class="container-user col-11 mx-auto mt-5">
            <div style="max-height: 75vh; overflow-x: hidden; overflow-y: scroll;">
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
                        foreach ($data['pembayaran'] as $pmb) :
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