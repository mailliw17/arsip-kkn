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
                            <h1>Tambah Mahasiswa KKN</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <hr>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">
                            <form action="<?= base_url() ?>home/tambah" method="POST">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" id="nama" style="border-color: grey" autocomplete="off" required>
                                    <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>');  ?>
                                </div>
                                <div class="form-group">
                                    <label>Asal Universitas</label>
                                    <input type="text" class="form-control" name="universitas" id="universitas" style="border-color: grey" autocomplete="off" required>
                                    <?= form_error('universitas', ' <small class="text-danger pl-3">', '</small>');  ?>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Fakultas</label>
                                            <input type="text" class="form-control" name="fakultas" id="fakultas" style="border-color: grey" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <input type="text" class="form-control" name="jurusan" id="jurusan" style="border-color: grey" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Tahun KKN</label>
                                    <input type="number" class="form-control" name="tahun" id="tahun" style="border-color: grey" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label>Program Kerja 1</label>
                                    <input type="text" class="form-control" name="proker1" id="proker1" style="border-color: grey" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label>Program Kerja 2</label>
                                    <input type="text" class="form-control" name="proker2" id="proker2" style="border-color: grey" autocomplete="off" required>
                                </div>
                                <div class="form-group float-right">
                                    <a class="btn btn-danger" href="<?= base_url('home') ?>" type="reset">Batal</a>
                                    <button class="btn btn-primary" type="submit">OK</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- /.content-wrapper -->