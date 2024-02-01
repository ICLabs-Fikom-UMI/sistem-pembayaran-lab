<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/Home.css" />
<div class="container-home">
    <div class="container text-center">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col p-5 m-5">
                <img class="fikom-icon" src="<?= BASEURL ?>/assets/img/fikom-icons.png" alt="fikom">
            </div>
            <div class="col p-5 m-5">
                <div class="card cek-pembayaran p-3 gb-dark text-light opacity-75" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-body">CHECK PEMBAYARAN</h5>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php stambukCek::flash(); ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card form-cek-pembayaran d-flex justify-content-center align-items-center">
                            <form action="<?= BASEURL; ?>/Home/check" method="POST">
                                <div class="mb-3">
                                    <input type="number" class="form-control" name="stambuk" placeholder="Masukkan Stambuk">
                                </div>
                                <button type="submit" class="btn-cek">Check</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>