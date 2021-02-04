<body class="hold-transition sidebar-mini">

  <div class="wrapper">
    <!-- Navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="container" style="margin-top: 25px;">
        <center>
          <h1>Selamat Datang, Bapak/Ibu <?php echo $this->session->userdata('nama'); ?> !</h1>
        </center>
      </div>
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Pendataan Mahasiswa KKN</h1>
            </div>
          </div>
          <a type="button" href="<?= base_url() ?>home/tambah" class="btn btn-info btn-sm"><i class="fas fa-plus-circle"></i> Tambah Mahasiswa</a>
        </div><!-- /.container-fluid -->
      </section>

      <!-- <div class="container"> -->
      <div class="row">
        <div class="col-12">
          <?php if ($this->session->flashdata('message_hapus')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Data Mahasiswa Berhasil Dihapus !
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <!-- </div> -->

      <!-- <div class="container"> -->
      <div class="row">
        <div class="col-12">
          <?php if ($this->session->flashdata('message_berhasil')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Mahasiswa Baru Berhasil Didaftarkan ke sistem !
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <!-- </div> -->

      <!-- <div class="container"> -->
      <div class="row">
        <div class="col-12">
          <?php if ($this->session->flashdata('message_edit')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Data Mahasiswa Berhasil Diperbarui !
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <!-- </div> -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Mahasiswa</h3>

                </div>

                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nomor</th>
                        <th>Nama Lengkap</th>
                        <th>Universitas</th>
                        <th>Fakultas</th>
                        <th>Jurusan</th>
                        <th>Tahun KKN</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($mahasiswa as $mhs) :
                      ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $mhs['nama']; ?></td>
                          <td><?php echo $mhs['universitas']; ?></td>
                          <td><?php echo $mhs['fakultas']; ?></td>
                          <td><?php echo $mhs['jurusan']; ?></td>
                          <td><?php echo $mhs['tahun']; ?></td>
                          <td>
                            <a type="button" class="btn btn-primary btn-sm" href="<?php echo base_url('home/detail/') . $mhs['id_mhs'] ?>"> <i class="fas fa-info-circle"></i> Rincian</a>

                            <a type="button" class="btn btn-danger btn-sm" onclick="javacript:return confirm('Anda yakin akan menghapus data mahasiswa?')" href="<?php echo base_url('home/hapus/') . $mhs['id_mhs'] ?>"> <i class="far fa-trash-alt"></i> Hapus</a>

                            <a type="button" class="btn btn-info btn-sm" href="<?php echo base_url('home/edit/') . $mhs['id_mhs'] ?>"> <i class="far fa-edit"></i> Perbarui</a>

                          </td>
                        </tr>
                      <?php $no++;
                      endforeach; ?>
                    </tbody>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->