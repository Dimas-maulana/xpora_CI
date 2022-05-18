<?php
$url = $this->uri->segment(1);
$akun = $url == "akun" ? "menuActive" : "";
$proses_verifikasi = $url == "proses_verifikasi" ? "menuActive" : "";
$ceklevelbisnis = $url == "ceklevelbisnis" ? "menuActive" : "";
$ekspansirequest = $url == "ekspansirequest" ? "menuActive" : "";
$ekspansimatchmaking = $url == "ekspansimatchmaking" ? "menuActive" : "";
$commodities = $url == "commodities" ? "menuActive" : "";
$urll = $this->uri->segment(2);
$all = $urll == "" ? "tabActive" : "";
$buyer = $urll == "buyer" ? "tabActive" : "";
$indirect_exportir = $urll == "indirect_exportir" ? "tabActive" : "";
$direct_exportir = $urll == "direct_exportir" ? "tabActive" : "";
$diaspora = $urll == "diaspora" ? "tabActive" : "";
?>
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('#'); ?>">
                <span>Dashboard</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= $akun ?>" href="<?= site_url('akun'); ?>">
                <span>Akun</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= $proses_verifikasi ?>" href="<?= site_url('proses_verifikasi'); ?>">
                <span>Proses Verifikasi</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= $ceklevelbisnis ?>" href="<?= site_url('ceklevelbisnis'); ?>">
                <span>Cek Level Bisnis</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <span>Ekspansi Bisnis</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item <?= $akun ?>" href="<?= site_url('ekspansimatchmaking'); ?>">Matchmaking log</a>
                    <a class="collapse-item <?= $akun ?>" href="<?= site_url('commodities'); ?>">Commodities</a>
                    <a class="collapse-item <?= $akun ?>" href="<?= site_url('ekspansirequest'); ?>">Request</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <span>Inspirasi</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#">Post</a>
                    <a class="collapse-item" href="#">User</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('#'); ?>">
                <span>Diaspora</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('#'); ?>">
                <span>Produk BNI</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('#'); ?>">
                <span>Sistem Digital UMKM</span></a>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= $all ?>" href="<?= site_url('akun'); ?>">All</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link <?= $buyer ?>" href="<?= site_url('akun/buyer'); ?>">Buyer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $indirect_exportir ?>" href="<?= site_url('akun/indirect_exportir'); ?>">Indirect Exportir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $direct_exportir ?>" href="<?= site_url('akun/direct_exportir'); ?>">Direct Exportir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $diaspora ?>" href="<?= site_url('akun/diaspora'); ?>">Diaspora</a>
                    </li>
                </ul>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <div style="padding-right: 20px;">
                        <a href="<?= site_url('akun/create_akun') ?>"><button type="submit" class="btn btn-primary">Create Account</button></a>
                    </div>

                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
                            Download
                        </button>
                        <div class="dropdown-menu dropdown-menu-right sekuy" aria-labelledby="dropdownMenu2">
                            <!-- <a class="dropdown-item " href="<?= base_url('akun/export') ?>">Download all data</a> -->
                            <!-- <a class="dropdown-item" href="<?= base_url('akun/export_filter/' . $this->session->userdata('cari')) ?>">Download filtered data</a> -->
                        </div>
                    </div>
                </ul>

            </nav>


            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div>
                    <?php
                    $this->load->view($content);
                    ?>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->