<?php echo form_open_multipart($action, array('role' => 'form')); ?>
<div style="margin-bottom: 10px;">
    <a href="<?= site_url('akun'); ?>"><img src="https://cdn0.iconfinder.com/data/icons/web-seo-and-advertising-media-1/512/218_Arrow_Arrows_Back-512.png" style="width: 20px; height: 20px;">Kembali</a>
</div>
<h5>Create Account</h5>
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <h5>Foto Profil</h5>
                <div class="d-flex flex-column align-items-center text-center" id="showImageHere">
                    <img src="https://aecsp.qc.ca/wp-content/uploads/2021/03/person_icon-icons.com_50075.png" alt="Admin" class="rounded-circle p-1 " width="150" height="150">
                </div>
                <div class="input-group lb-3">
                    <div class="custom-file">
                        <input class="custom-file-input" type="file" id="uploadImageFile" name="userfiles" onchange="showImage()" accept=".jpg, .png" aria-describedby="inputGroupFileAddon01" required>
                        <label class="custom-file-label" for="uploadImageFile">Choose file</label>
                    </div>
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
                        <input type="text" name="kd_data_diri" class="form-control" value="<?= $kode ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12 text-secondary">
                        <label>Nama Pemilik</label>
                        <input type="text" name="nama_pemilik" class="form-control" placeholder="Nama Pemilik Usaha" autocomplete="off" pattern="{5}" required>
                    </div>
                </div>
                <div class=" row mb-3">
                    <div class="col-sm-12 text-secondary">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off" pattern="{5,}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12 text-secondary">
                        <label>No. Telepon</label>
                        <input type="text" name="no_telp" class="form-control" placeholder="No Telepon" autocomplete="off" pattern="[0-9]{11,13}" required>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            No. Telepon Harus Menggunakan Format Sebagai Berikut 08XXXXXXXX
                        </small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12 text-secondary">
                        <label>NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="NIK" autocomplete="off" pattern="[0-9]{16,16}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12 text-secondary">
                        <label>NPWP</label>
                        <input type="text" name="npwp" class="form-control" placeholder="NPWP" autocomplete="off" pattern="[0-9 .-]{15,}" required>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            NPWP Harus Menggunakan Format Sebagai Berikut XX.XX.XXX.X-XXX.XXX
                        </small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12 text-secondary">
                        <label>Domisili</label>
                        <select id="inputState" class="form-control" name="domisili" required>
                            <!-- Pake array kan bisa :) -->
                            <option selected disabled>Domisili</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Bali">Bali</option>
                            <option value="Bangka Belitung">Bangka Belitung</option>
                            <option value="Banten">Banten</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Papua Barat">Papua Barat</option>
                            <option value="Papua">Papua</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Sumatra Barat">Sumatra Barat</option>
                            <option value="Sumatra Selatan">Sumatra Selatan</option>
                            <option value="Sumatra Utara">Sumatra Utara</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="font-weight-bold">Data Usaha</h5>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>Nama Perusahaan</label>
                            <input type="text" name="nama_usaha" class="form-control" placeholder="Nama Perusahaan" autocomplete="off" pattern="{5}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>Domisili</label>
                            <select id="inputState" class="form-control" name="domisili_perusahaan" required>
                                <option selected disabled>Domisili</option>
                                <option value="Aceh">Aceh</option>
                                <option value="Bali">Bali</option>
                                <option value="Bangka Belitung">Bangka Belitung</option>
                                <option value="Banten">Banten</option>
                                <option value="Bengkulu">Bengkulu</option>
                                <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                                <option value="DKI Jakarta">DKI Jakarta</option>
                                <option value="Gorontalo">Gorontalo</option>
                                <option value="Jambi">Jambi</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Jawa Tengah">Jawa Tengah</option>
                                <option value="Jawa Timur">Jawa Timur</option>
                                <option value="Kalimantan Barat">Kalimantan Barat</option>
                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                <option value="Kalimantan Utara">Kalimantan Utara</option>
                                <option value="Kepulauan Riau">Kepulauan Riau</option>
                                <option value="Lampung">Lampung</option>
                                <option value="Maluku Utara">Maluku Utara</option>
                                <option value="Maluku">Maluku</option>
                                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                <option value="Papua Barat">Papua Barat</option>
                                <option value="Papua">Papua</option>
                                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                <option value="Sulawesi Utara">Sulawesi Utara</option>
                                <option value="Sumatra Barat">Sumatra Barat</option>
                                <option value="Sumatra Selatan">Sumatra Selatan</option>
                                <option value="Sumatra Utara">Sumatra Utara</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>Email Perusahaan</label>
                            <input type="email" name="email_perusahaan" class="form-control" placeholder="Email Perusahaan" autocomplete="off" pattern="{5,}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>Website</label>
                            <input type="text" name="website" class="form-control" placeholder="Website Perusahaan" autocomplete="off" pattern="{5,}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Bidang Usaha</label>
                        <select id="inputState" class="form-control" name="bidang_usaha" required>
                            <option selected disabled>Bidang Usaha</option>
                            <option value="Pertanian dan Perkebunan">Pertanian dan Perkebunan</option>
                            <option value="Tesktill">Tesktill</option>
                            <option value="Perikanan">Perikanan</option>
                            <option value="Buah dan Sayur">Buah dan Sayur</option>
                        </select>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>Komoditi Usaha</label>
                            <input type="text" name="komoditi_usaha" class="form-control" placeholder="Komoditi Usaha" autocomplete="off" pattern="[A-Za-z\s]{3,100}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6 text-secondary">
                            <label>Skala Produksi</label>
                            <input type="text" name="skala" class="form-control" placeholder="Skala Produksi" autocomplete="off" pattern="[0-9]{,16}" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Satuan</label>
                            <select id="inputState" class="form-control" name="satuan" required>
                                <option selected disabled>Satuan</option>
                                <option value="Ton (T)">Ton (T)</option>
                                <option value="Kilo Gram (Kg)">Kilo Gram (Kg)</option>
                                <option value="Gram (Gr)">Gram (Gr)</option>
                                <option value="Mili Gram (Mg)">Mili Gram (Mg)</option>
                                <option value="Pound (Lb)">Pound (Lb)</option>
                                <option value="Ons (Oz)">Ons (Oz)</option>
                                <option value="Meter (M)">Meter (M)</option>
                                <option value="Centimeter (Cm)">Centimeter (Cm)</option>
                                <option value="Milimeter (Mm)">Milimeter (Mm)</option>
                                <option value="Yard (Yd)">Yard (Yd)</option>
                                <option value="Foot (Ft)">Foot (Ft)</option>
                                <option value="Inch (In)">Inch (In)</option>
                                <option value="Hektar (Ha">Hektar (Ha</option>
                                <option value="Kilometer Square (Km²)">Kilometer Square (Km²)</option>
                                <option value="Meter Square (M²)">Meter Square (M²)</option>
                                <option value="Square Yard (Yd²)">Square Yard (Yd²)</option>
                                <option value="Square Foot (Ft²)">Square Foot (Ft²)</option>
                                <option value="Kilometer (Km)">Kilometer (Km)</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>NIB Perusahaan</label>
                            <input type="text" name="nib" class="form-control" placeholder="NIB Perusahaan" autocomplete="off" pattern="[0-9]{13,13}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>NPWP Perusahaan</label>
                            <input type="text" name="npwp_perusahaan" class="form-control" placeholder="NPWP Perusahaan" autocomplete="off" pattern="[0-9 .-]{15,}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>No. SIUP</label>
                            <input type="text" name="no_siup" class="form-control" placeholder="No. SIUP" autocomplete="off" pattern="[0-9]{4,5}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>No. PEB</label>
                            <input type="text" name="no_peb" class="form-control" placeholder="No. PEB" autocomplete="off" pattern="[0-9]{5,6}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-secondary">
                            <label>No. Akta</label>
                            <input type="text" name="no_akta" class="form-control" placeholder="No. Akta Perusahaan" autocomplete="off" pattern="[0-9]{5,}" required>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bold">User Type</h5>
                        <div class="form-group">
                            <select id="inputState" class="form-control" name="user_type" required>
                                <option selected disabled>Choose...</option>
                                <option value="Buyer">Buyer</option>
                                <option value="Indirect Exportir">Indirect Exportir</option>
                                <option value="Direct Exportir">Direct Exportir</option>
                                <option value="Diaspora">Diaspora</option>
                            </select>
                        </div>

                        <div class="row" style="float: right;">
                            <button type="submit" class="btn btn-success" style="margin-right:20px">Create Acoount</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">Cancel</button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="staticBackdropLabel">WARNING!!!</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        User membatalkan membuat akun baru
                                    </div>
                                    <div class="modal-footer">
                                        <a href="<?= site_url('akun') ?>"><button type="button" class="btn btn-danger">OK</button></a>
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>