<?php
$url = $this->uri->segment(1);
$clb_record = $url == "c_clbrecord" ? "menuActive" : "";
//if ($data->gambar != "") $gambar = explode(",", $data->gambar); //kenapa pake explode? karna pake koma di databasenya
//contoh: img_1.jpg, img_2.jpg dipisah setiap ada koma jadi index array, makenya explode
//kebalikannya namanya implode, dari array jadi string terus disimpen ke database
//else $gambar = array();
?>
<div style="margin-bottom: 10px;">
    <a href="<?= site_url('akun'); ?>"><img src="https://cdn0.iconfinder.com/data/icons/web-seo-and-advertising-media-1/512/218_Arrow_Arrows_Back-512.png" style="width: 20px; height: 20px;">Kembali</a>
</div>
<h5>Detail Account / User Data</h5>
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="">User Data</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href=<?= site_url('detail_akun'); ?>>Verification Data</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href=<?= site_url('c_ekspansibisnis'); ?>>Ekspansi Bisnis</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('inspirasi'); ?>">Inspirasi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('produk_bni'); ?>">Produk BNI</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('c_clbrecord'); ?>">CLB Record</a>
    </li>
</ul>
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <h5>Foto Profil</h5>
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?= base_url('images/' . $row->foto) ?>" alt="Admin" class="rounded-circle p-1 " width="150" value="<?= $row->foto ?>">
                </div>

                <div style="padding-top:20px;">
                    <form action="/xpora/detail_akun/excel_datadiri">
                        <button type="button" class="btn btn-outline-primary btn-lg" style="width:100%; font-size:14px;">Download Detail Diri</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h5 class="font-weight-bold">Data Diri</h5>
                <div class="row mb-3">
                    <div class="col-sm-12 text-secondary">
                        <label>Kode Data Diri</label>
                        <input type="text" name="kd_data_diri" class="form-control" value="<?= $row->kd_data_diri ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12 text-secondary">
                        <label>Nama Pemilik</label>
                        <input type="text" name="nama_pemilik" class="form-control" value="<?= $row->nama_pemilik ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12 text-secondary">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?= $row->email ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12 text-secondary">
                        <label>No. Telepon</label>
                        <input type="text" name="no_telp" class="form-control" value="<?= $row->no_telp ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12 text-secondary">
                        <label>NIK</label>
                        <input type="text" name="nik" class="form-control" value="<?= $row->nik ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12 text-secondary">
                        <label>NPWP</label>
                        <input type="text" name="npwp" class="form-control" value="<?= $row->npwp ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12 text-secondary">
                        <label>Domisili</label>
                        <input type="text" name="domisili" class="form-control" value="<?= $row->domisili ?>" readonly>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="font-weight-bold">Data Usaha</h5>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>Nama Perusahaan</label>
                            <input type="text" name="nama_usaha" class="form-control" value="<?= $row->nama_usaha ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>Domisili</label>
                            <input type="text" name="domisili_perusahaan" class="form-control" value="<?= $row->domisili_perusahaan ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>Email Perusahaan</label>
                            <input type="text" name="email_perusahaan" class="form-control" value="<?= $row->email_perusahaan ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>Website</label>
                            <input type="text" name="website" class="form-control" value="<?= $row->website ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>Bidang Usaha</label>
                            <input type="text" name="bidang_usaha" class="form-control" value="<?= $row->bidang_usaha ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>Komoditi Usaha</label>
                            <input type="text" name="komoditi_usaha" class="form-control" value="<?= $row->komoditi_usaha ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6 text-secondary">
                            <label>Skala Produksi</label>
                            <input type="text" name="skala" class="form-control" value="<?= $row->skala ?>" readonly>
                        </div>
                        <div class="col-sm-6 text-secondary">
                            <label>Satuan</label>
                            <input type="text" name="satuan" class="form-control" value="<?= $row->satuan ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>NIB Perusahaan</label>
                            <input type="text" name="nib" class="form-control" value="<?= $row->nib ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>NPWP Perusahaan</label>
                            <input type="text" name="npwp_perusahaan" class="form-control" value="<?= $row->npwp_perusahaan ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>No. SIUP</label>
                            <input type="text" name="no_siup" class="form-control" value="<?= $row->no_siup ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>No. PEB</label>
                            <input type="text" name="no_peb" class="form-control" value="<?= $row->no_peb ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>No. Akta</label>
                            <input type="text" name="no_akta" class="form-control" value="<?= $row->no_akta ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bold">User Type</h5>
                        <div class="row mb-3">
                            <div class="col-sm-12 text-secondary">
                                <input type="text" name="user_type" class="form-control" value="<?= $row->user_type ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>