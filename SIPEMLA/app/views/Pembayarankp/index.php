<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/pembayarankp.css">
<div class="container-usermanagement1">
    <div class="mt-5 ms-4 mb-5">
        <h5>Pembayaran</h5>
    </div>
    <div>
        <div class="container-user col-12 mx-auto">
            <div class="overflow-y-auto p-4" style="max-height: 75vh;">
                <div class="overflow-x-auto rounded-4 shadow-lg p-3" style="min-width: 750px;">
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

</div>