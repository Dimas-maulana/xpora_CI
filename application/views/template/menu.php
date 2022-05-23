<body id="page-top">

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
                <a class="nav-link" href="<?= site_url('akun'); ?>">
                    <span>Akun</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('proses_verifikasi'); ?>">
                    <span>Proses Verifikasi</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('ceklevelbisnis'); ?>">
                    <span>Cek Level Bisnis</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <span>Ekspansi Bisnis</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= site_url('matchmaking_log'); ?>">Matchmaking log</a>
                        <a class="collapse-item" href="<?= site_url('commodities'); ?>">Commodities</a>
                        <a class="collapse-item" href="<?= site_url('ekspansirequest'); ?>">Request</a>
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
                            <a class="nav-link" href="<?= site_url('akun'); ?>">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('buyer'); ?>">Buyer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('indirect_exportir'); ?>">Indirect Exportir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('direct_exportir'); ?>">Direct Exportir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('diaspora'); ?>">Diaspora</a>
                        </li>
                    </ul>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <div style="padding-right: 20px;">
                            <a href="<?= site_url('akun/create_akun') ?>"><button type="submit" class="btn btn-primary">Create Account</button></a>
                        </div>

                        <!-- Nav Item - User Information -->
                        <div class="btn-group">
                            <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                Download By
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width: 300px;">
                                <a class="dropdown-item" href="<?= base_url('akun/export') ?>">Download all data</a>
                                <a class="dropdown-item" href="<?= base_url('akun/export_filter/' . $this->session->userdata('cari')) ?>">Download filtered data</a>
                                <a class="dropdown-item" href="#">Share filtered data</a>
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

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>templates/js/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>templates/js/js/popup.js"></script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
</body>