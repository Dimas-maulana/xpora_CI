<div class="container" style="background-color: #FFF">
    <div class="row">
        <div class="col-12 pt-5">
            <div class="row">
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <h4>Detail Matchmaking</h4>
                </div>
                <div class="col-12 col-md-6 d-flex mb-4" style="flex-direction: column">
                    <label>Matchmaking ID</label>
                    <span>
                        <strong><?= $matchmaking_detail->matchmaking_id ?></strong>
                    </span>
                </div>
                <div class="col-12 col-md-6 d-flex mb-4" style="flex-direction: column">
                    <label>Tanggal Aplikasi</label>
                    <span>
                        <strong><?= $matchmaking_detail->application_date ?></strong>
                    </span>
                </div>
                <div class="col-12 col-md-6 d-flex mb-4" style="flex-direction: column">
                    <label>Komoditas</label>
                    <span>
                        <strong><?= $matchmaking_detail->comodity ?></strong>
                    </span>
                </div>
                <div class="col-12 col-md-6 d-flex mb-4" style="flex-direction: column">
                    <label>Tujuan</label>
                    <span>
                        <strong><?= $matchmaking_detail->destination ?></strong>
                    </span>
                </div>
                <div class="col-12 col-md-6 d-flex mb-4" style="flex-direction: column">
                    <label>Harga</label>
                    <span>
                        <strong><?= $matchmaking_detail->value ?></strong>
                    </span>
                </div>
                <div class="col-12 col-md-6 d-flex mb-4" style="flex-direction: column">
                    <label>Sistem Pembayaran</label>
                    <span>
                        <strong><?= $matchmaking_detail->payment_system ?></strong>
                    </span>
                </div>
                <div class="col-12 col-md-6 d-flex mb-4" style="flex-direction: column">
                    <label>Status</label>
                    <span>
                        <strong><?= $matchmaking_detail->status ?></strong>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 pt-5">
            <div class="row">
                <div class="col-12 d-flex mb-4" style="flex-direction: row; justify-content: flex-start; align-items: center;">
                    <h4 class="mb-0">Seller</h4>
                    <a href="<?= site_url('/akun/detail_akun/'.$seller['kd_data_diri']) ?>" class="btn btn-sm btn-info d-inline-block ml-3">Detail Akun</a>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>KD Data Diri</label>
                    <span>
                        <strong><?= $seller['kd_data_diri'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Nama Usaha</label>
                    <span>
                        <strong><?= $seller['nama_usaha'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Bidang Usaha</label>
                    <span>
                        <strong><?= $seller['bidang_usaha'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Komoditas Perusahaan</label>
                    <span>
                        <strong><?= $seller['komoditi_usaha'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Nomor Telepon</label>
                    <span>
                        <strong><?= $seller['no_telp'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Email</label>
                    <span>
                        <strong><?= $seller['email_perusahaan'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>NPWP</label>
                    <span>
                        <strong><?= $seller['npwp_perusahaan'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>SIUP</label>
                    <span>
                        <strong><?= $seller['no_siup'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Lokasi Perusahaan</label>
                    <span>
                        <strong><?= $seller['kecamatan'] ?>, <?= $seller['kota'] ?>, <?= $seller['provinsi'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Domisili Perusahaan</label>
                    <span>
                        <strong><?= $seller['domisili_perusahaan'] ?></strong>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 pt-5">
            <div class="row">
                <div class="col-12 d-flex mb-4" style="flex-direction: row; justify-content: flex-start; align-items: center;">
                    <h4 class="mb-0">Buyer</h4>
                    <a href="<?= site_url('/akun/detail_akun/'.$buyer['kd_data_diri']) ?>" class="btn btn-sm btn-info d-inline-block ml-3">Detail Akun</a>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>KD Data Diri</label>
                    <span>
                        <strong><?= $buyer['kd_data_diri'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Nama Usaha</label>
                    <span>
                        <strong><?= $buyer['nama_usaha'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Bidang Usaha</label>
                    <span>
                        <strong><?= $buyer['bidang_usaha'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Komoditas Perusahaan</label>
                    <span>
                        <strong><?= $buyer['komoditi_usaha'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Nomor Telepon</label>
                    <span>
                        <strong><?= $buyer['no_telp'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Email</label>
                    <span>
                        <strong><?= $buyer['email_perusahaan'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>NPWP</label>
                    <span>
                        <strong><?= $buyer['npwp_perusahaan'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>SIUP</label>
                    <span>
                        <strong><?= $buyer['no_siup'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Lokasi Perusahaan</label>
                    <span>
                        <strong><?= $buyer['kecamatan'] ?>, <?= $buyer['kota'] ?>, <?= $buyer['provinsi'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Domisili Perusahaan</label>
                    <span>
                        <strong><?= $buyer['domisili_perusahaan'] ?></strong>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>