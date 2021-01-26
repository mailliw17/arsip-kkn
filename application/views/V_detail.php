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
                            <h1>Detail Mahasiswa KKN</h1>
                        </div>
                    </div>
                    <a type="button" href="<?= base_url() ?>home" class="btn btn-info btn-sm"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
                </div><!-- /.container-fluid -->
            </section>
            <hr>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <th scope="col">Nama :</th>
                                        <td><?php echo $detail['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Universitas :</th>
                                        <td><?php echo $detail['universitas']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Fakultas :</th>
                                        <td><?php echo $detail['fakultas']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Jurusan :</th>
                                        <td><?php echo $detail['jurusan']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Tahun KKN :</th>
                                        <td><?php echo $detail['tahun']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Program Kerja 1 :</th>
                                        <td><?php echo $detail['proker1']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Program Kerja 2 :</th>
                                        <td><?php echo $detail['proker2']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- /.content-wrapper -->