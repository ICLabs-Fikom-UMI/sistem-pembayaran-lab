<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/usermanagement.css">
<div class="container-usermanagement1">
    <div class="container-btn mt-3 ">
        <a class="btn-logout btn-sm" href="<?= BASEURL ?>/Login/keluar" role="button" onclick="return confirm('Anda Yakin Ingin Keluar')">Logout</a>
    </div>
    <div class="mt-5 ms-3 mb-2">
        <h5>User Management</h5>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div>
        <div class="container-user rounded col-12 mx-auto">
            <div class="container-btn-add mb-3">
                <button class="btn-add add-user" type="button" data-bs-toggle="modal" data-bs-target="#formUser"><img src="<?= BASEURL ?>/assets/img/add.png" alt="">add</button>
            </div>
            <div class="overflow-y-auto p-4" style="max-height: 75vh;">
            <div class="overflow-x-auto rounded-4 shadow-lg p-3" style="min-width: 750px;">
                <table id="myTable" class="table table-bordered table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $no = 0;
                        foreach ($data['user'] as $user) :
                            $no++;
                        ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $user['username']; ?></td>
                                <td><?= $user['password']; ?></td>
                                <td><?= $user['role']; ?></td>
                                <td>
                                    <a class="btn-edit edit-user" role="button" href="<?= BASEURL; ?>/Usermanagement/edit/<?= $user['iduser'] ?>" data-bs-toggle="modal" data-bs-target="#formUser" data-id="<?= $user['iduser']; ?>"><img src="<?= BASEURL ?>/assets/img/edit.png" alt="icon-edit"></a>
                                    <a class="btn-delete" role="button" href="<?= BASEURL; ?>/Usermanagement/hapus/<?= $user['iduser'] ?>" onclick="return confirm('Anda yakin Ingin Hapus?')"><img src="<?= BASEURL ?>/assets/img/delete.png" alt="icon-delete"></a>
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

<!-- Modal-->
<div class="modal fade" id="formUser" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModalLabel">Tambah User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/Usermanagement/tambah" method="post">
                    <input type="hidden" class="id" name="iduser" id="id">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control input-username" id="input-username" name="username" placeholder="Masukkan Username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control input-password" id="input-password" name="password" placeholder="Masukkan Password">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select option-role" aria-label="Default select example" name="role" id="option-role">
                            <option selected>Pilih Role</option>
                            <option value="Admin">Admin</option>
                            <option value="Kepala Lab">Kepala Lab</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer modal-user">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Add User</button>
                </form>
            </div>
        </div>
    </div>
</div>