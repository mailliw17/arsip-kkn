<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet"> -->

    <link rel="stylesheet" href="<?= base_url() ?>vendor/template-frontend/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url() ?>vendor/template-frontend/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>vendor/template-frontend/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url() ?>vendor/template-frontend/css/style.css">

    <title><?php if (!empty($page_title)) echo $page_title; ?></title>
</head>

<body>


    <div class="half">
        <div class="bg order- order-md-2" style="background-image: url(<?= base_url() ?>vendor/template-frontend/images/menarique.jpg)"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="form-block">
                            <div class="text-center mb-5">
                                <h3><strong>Sistem Pendataan Mahasiswa KKN</strong></h3>
                                <hr>
                                <h2 class="mb-4">KELURAHAN JABUNGAN</h2>
                            </div>

                            <!-- INI FLASHMESSAGE -->
                            <?php if ($this->session->flashdata('gagal_login')) : ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Username / Password salah !
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>

                            <?php if ($this->session->flashdata('message')) : ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Password Berhasil Diganti <br>
                                    Silahkan Login Ulang !
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>

                            <?php if ($this->session->flashdata('penyusup')) : ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Silahkan login terlebih dahulu
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>


                            <form action="<?= base_url() ?>auth" method="POST">
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username" autocomplete="off" placeholder="Silahkan masukan username..." required autofocus>
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="*******" required>
                                </div>
                                <input type="submit" value="Log In" class="btn btn-block btn-primary">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-left p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                Website Pendataan Mahasiswa KKN desa Jabungan
            </div>
            <!-- Copyright -->
        </footer>


    </div>




    <script src="<?= base_url() ?>vendor/template-frontend/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>vendor/template-frontend/js/popper.min.js"></script>
    <script src="<?= base_url() ?>vendor/template-frontend/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>vendor/template-frontend/js/main.js"></script>
</body>

</html>