<div class="container" style="background-color: #FFF">
    <div class="row">
        <div class="col-12 col-md-6 pt-5">
            <div class="row">
                <div class="col-12 d-flex mb-4" style="flex-direction: row; justify-content: flex-start; align-items: center;">
                    <h4 class="mb-0">Detail Request</h4>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Request Post ID</label>
                    <span>
                        <strong><?= $ekspansi_request->request_post_id ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Nama Komoditas</label>
                    <span>
                        <strong><?= $ekspansi_request->comodity_name ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Kategori Komoditas</label>
                    <span>
                        <strong><?= $ekspansi_request->category ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Jumlah Request</label>
                    <span>
                        <strong><?= $ekspansi_request->qty_komoditas ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Incoterm</label>
                    <span>
                        <strong><?= $ekspansi_request->incoterm ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Frekuensi</label>
                    <span>
                        <strong><?= $ekspansi_request->frekuensi ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Destinasi</label>
                    <span>
                        <strong><?= $ekspansi_request->destination ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Metode Pembayaran</label>
                    <span>
                        <strong><?= $ekspansi_request->payment ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Status</label>
                    <span>
                        <strong><?= $ekspansi_request->status ?></strong>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 pt-5">
            <div class="row">
                <div class="col-12 d-flex mb-4" style="flex-direction: row; justify-content: flex-start; align-items: center;">
                    <h4 class="mb-0">Data Akun</h4>
                    <a href="<?= site_url('/akun/detail_akun/'.$user['kd_data_diri']) ?>" class="btn btn-sm btn-info d-inline-block ml-3">Detail Akun</a>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>KD Data Diri</label>
                    <span>
                        <strong><?= $user['kd_data_diri'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Nama Usaha</label>
                    <span>
                        <strong><?= $user['nama_usaha'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Bidang Usaha</label>
                    <span>
                        <strong><?= $user['bidang_usaha'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Komoditas Perusahaan</label>
                    <span>
                        <strong><?= $user['komoditi_usaha'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Nomor Telepon</label>
                    <span>
                        <strong><?= $user['no_telp'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Email</label>
                    <span>
                        <strong><?= $user['email_perusahaan'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>NPWP</label>
                    <span>
                        <strong><?= $user['npwp_perusahaan'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>SIUP</label>
                    <span>
                        <strong><?= $user['no_siup'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Lokasi Perusahaan</label>
                    <span>
                        <strong><?= $user['kecamatan'] ?>, <?= $user['kota'] ?>, <?= $user['provinsi'] ?></strong>
                    </span>
                </div>
                <div class="col-12 d-flex mb-4" style="flex-direction: column">
                    <label>Domisili Perusahaan</label>
                    <span>
                        <strong><?= $user['domisili_perusahaan'] ?></strong>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
