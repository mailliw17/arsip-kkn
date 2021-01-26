<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <!-- Navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Ganti Password</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- flashdata kalau berhasil nambah -->
            <?= $this->session->flashdata('message') ?>
            <hr>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">
                            <form action="<?= base_url() ?>auth/gantipassword" method="POST">
                                <div class="form-group">
                                    <label for="passwordLama">Password Lama</label>
                                    <input type="password" class="form-control" id="passwordLama" placeholder="Masukan password lama" name="passwordLama" required>
                                    <?= form_error('passwordLama', ' <small class="text-danger pl-3">', '</small>');  ?>
                                </div>

                                <div class="form-group">
                                    <label for="passwordBaru1">Password Baru</label>
                                    <input type="password" class="form-control" id="passwordBaru1" placeholder="Masukan password baru" name="passwordBaru1" required>
                                    <?= form_error('passwordBaru1', ' <small class="text-danger pl-3">', '</small>');  ?>
                                </div>

                                <div class="form-group">
                                    <label for="passwordBaru2">Ulangi Password Baru</label>
                                    <input type="password" class="form-control" id="passwordBaru2" placeholder="Masukan password baru" name="passwordBaru2" required>
                                    <?= form_error('passwordBaru2', ' <small class="text-danger pl-3">', '</small>');  ?>
                                </div>

                                <div class="form-group float-right">
                                    <a class="mt-1 btn btn-danger" type="reset" href="<?= base_url('dashboard') ?>">Batal</a>
                                    <button class="mt-1 btn btn-primary" type="submit">Ganti Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- /.content-wrapper -->