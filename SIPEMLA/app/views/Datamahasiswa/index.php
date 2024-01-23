<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/datamahasiswa.css">
<div class="container-usermanagement1">
    <div class="container-btn mt-3 ">
        <a class="btn-logout btn-sm" href="http://localhost/SIPEMLA/" role="button">Logout</a>
    </div>
    <div class="mt-5 ms-3 mb-5">
        <h5>Data Mahasiswa</h5>
    </div>
    <div class="container-btn-add ">
        <button class="btn-add" type="submit"><img src="<?= BASEURL ?>/assets/img/add.png" alt="">add</button>
    </div>
    <div>
        <div class="container-user rounded mt-">
            <table id="example" class="table table-bordered table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Stambuk</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>SampleUser</td>
                        <td>SamplePassword</td>
                        <td>Admin</td>
                        <td>
                            <button class="btn-edit"><img src="<?= BASEURL ?>/assets/img/edit.png" alt="icon-edit"></button>
                            <button class="btn-delete"><img src="<?= BASEURL ?>/assets/img/delete.png" alt="icon-delete"></button>
                            <button class="btn-detail">Detail</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>