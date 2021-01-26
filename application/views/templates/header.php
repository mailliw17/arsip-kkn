<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if (!empty($page_title)) echo $page_title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>vendor/template-frontend/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>vendor/template-frontend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>vendor/template-frontend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>vendor/template-frontend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>vendor/template-frontend/dist/css/adminlte.min.css">
</head>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block"> <strong>SISTEM ARSIP KKN</strong></a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-open">

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>home">
                                <p> <i class="fas fa-users"></i> Data Mahasiswa</p>
                            </a>
                        </li>
                        <br>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>auth/gantipassword">
                                <p> <i class="fas fa-lock-open"></i> Ganti Password</p>
                            </a>
                        </li>
                        <br>
                        <li class="nav-item">
                            <a class="nav-link" onclick="javacript:return confirm('Anda yakin akan keluar?')" href="<?= base_url() ?>auth/logout">
                                <p><i class="fas fa-sign-out-alt"></i> Keluar</p>
                            </a>
                        </li>

                        <li>

                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>