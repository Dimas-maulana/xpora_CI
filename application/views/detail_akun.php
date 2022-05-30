<?php
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
    <a class="nav-link" href="">User Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="<?= site_url('detail_akun'); ?>">Verification Data</a>
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
<table class="table-striped">
    <thead>
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://img2.pngdownload.id/20180405/osq/kisspng-login-google-account-computer-icons-user-activity-5ac6bbe6ecba00.2369522615229736709696.jpg" alt="Admin" class="p-1 bg-secondary" width="150">
                                    <div class="mt-2">
                                        <h5>Assigned officer</h5>
                                    </div>
                                    <?php
                                    foreach ($verif as $key) {
                                    ?>
                                        <form action="/xpora/detail_akun/set_officer/" method="post" enctype="multipart/form-data">
                                    
                                            <div class="row mb-3">
                                                <div class="col-sm-12 text-secondary">
                                                    <?php
                                                    if ($key['verified'] === '1') {
                                                    ?>
                                                        <fieldset disabled>
                                                            <label for="disabledTextInput" class="form-label">Negara</label>
                                                            <input type="text" id="disabledTextInput" class="form-control disabled" placeholder="<?php foreach ($officer as $office) {
                                                                                                                                                        echo $office['negara'];
                                                                                                                                                    } ?>">
                                                        </fieldset>
                                                    <?php } else { ?>
                                                        <input type="text" class="form-control" placeholder="Negara" name="negara">
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-12 text-secondary">
                                                    <?php
                                                    if ($key['verified'] === '1') {
                                                    ?>
                                                        <fieldset disabled>
                                                            <label for="disabledTextInput" class="form-label">Kota</label>
                                                            <input type="text" id="disabledTextInput" class="form-control disabled" placeholder="<?php foreach ($officer as $office) {
                                                                                                                                                        echo $office['kota'];
                                                                                                                                                    } ?>">
                                                        </fieldset>
                                                    <?php } else { ?>
                                                        <input type="text" class="form-control" placeholder="Kota" name="kota">
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-12 text-secondary">
                                                    <?php
                                                    if ($key['verified'] === '1') {
                                                    ?>
                                                        <fieldset disabled>
                                                            <label for="disabledTextInput" class="form-label">Nama</label>
                                                            <input type="text" id="disabledTextInput" class="form-control disabled" placeholder="<?php foreach ($officer as $office) {
                                                                                                                                                        echo $office['nama'];
                                                                                                                                                    } ?>">
                                                        </fieldset>
                                                    <?php } else { ?>
                                                        <input type="text" class="form-control" placeholder="Officer" name="officer">
                                                    <?php
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                            <div class="mt-2">Verification Status <font color="#09ea69"><br><?php
                                                                                                                if ($key['verified'] === '1') {
                                                                                                                    echo "(Verified)";
                                                                                                                } else {
                                                                                                                    echo "(Not Verified)"; ?>
                                                                                                                    
                                                                                                              <?php  }
                                                                                                                ?></font>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-7 text-secondary">
                                                    
                                                </div>
                                                <div class="col-sm-5 text-secondary">
                                                    <?php
                                                    if ($key['verified'] === '1') { ?>
                                                        
                                                    <?php } else { ?>
                                                        <input type="submit" value="Verify" class="btn btn-secondary">
                                                    <?php }
                                                    ?>

                                                </div>
                                            </div>
                                            <input type="hidden" name="kd_data_diri" value=<?echo $id?>>
                                            
                                        </form>
                                    <?php } ?>
                                   
                                    <div class="mt-2">
                                        <form action="/xpora/detail_akun/excel_verif">
                                            <button class="btn btn-secondary" type="submit" style="font-size: 12px;">Download verification data</button>
                                        </form>
                                    </div>
                                    <div class="mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                foreach ($verif as $key) {
                                ?>
                                    <h5 class="font-weight-bold">Verifikasi legalitas</h5>
                                    <div class="row mb-3">
                                        <form action="<?= site_url('detail_akun'); ?>/update_nib/<?=$id?>" method="post" enctype="multipart/form-data">
                                            <div class="col-sm-4 text-secondary">
                                                <label for="nib">NIB</label>
                                                <input type="text" class="form-control" name="nib" id="nib" value=<?php echo $key["nib"]; ?> placeholder="NIB">
                                            </div>
                                            <div class="mb-3">
                                                <label for="qyc">QYC Check</label>
                                                <select name="qyc" class="form-control" value=<?php echo $key['qyc_nib']; ?> id='qyc'>
                                                    <?php if ($key['qyc_nib'] === "1") { ?>
                                                        <option value="1" selected>Approved</option>
                                                        <option value="0">Not Approved</option>
                                                    <?php } else { ?>
                                                        <option value="1">Approved</option>
                                                        <option value="0" selected>Not Approved</option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="col-sm-2 text-secondary">
                                                <label for="foto">Proof Pict</label>
                                                <input type="file" id="foto" name="foto" class="form-control"></input>
                                            </div>

                                            <div class="col-sm-2">
                                                <label for="submit">Action</label>
                                                <button class="btn btn-primary" type="submit" id="submit">Upload</button>
                                            </div>
                                        </form>
                                        <form action="/xpora/detail_akun/download_nib" method="post" enctype="multipart/form-data">
                                            <div cclass="col-sm-2 text-secondary">
                                                <button class="btn btn-success" type="submit" value=<?php echo $key["foto_nib"]; ?> name="download">Download</button>
                                            </div>
                                        </form>
                                    </div>


                                    <div class="row mb-3">
                                        <form action="/xpora/detail_akun/update_npwp" method="post" enctype="multipart/form-data">
                                            <div class="col-sm-4 text-secondary">
                                                <label for="npwp">NPWP</label>
                                                <input type="text" class="form-control" placeholder="NPWP" name="npwp" id="npwp" value=<?php echo $key["npwp_perusahaan"]; ?>>
                                            </div>
                                            <div class="mb-3">
                                                <label for="qyc">QYC Check</label>
                                                <select name="qyc" class="form-control" value=<?php echo $key['qyc_npwp']; ?> id='qyc'>
                                                    <?php if ($key['qyc_npwp'] === "1") { ?>
                                                        <option value="1" selected>Approved</option>
                                                        <option value="0">Not Approved</option>
                                                    <?php } else { ?>
                                                        <option value="1">Approved</option>
                                                        <option value="0" selected>Not Approved</option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="col-sm-2 text-secondary">
                                                <label for="foto">Proof Pict</label>
                                                <input type="file" id="foto" name="foto" class="form-control"></input>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="submit">Action</label>
                                                <button class="btn btn-primary" type="submit" id="submit">Upload</button>
                                            </div>
                                        </form>

                                        <form action="/xpora/detail_akun/download_npwp" method="post" enctype="multipart/form-data">
                                            <div cclass="col-sm-2 text-secondary">
                                                <button class="btn btn-success" type="submit" value=<?php echo $key["foto_npwp"]; ?> name="download">Download</button>
                                            </div>
                                        </form>

                                    </div>


                                    <div class="row mb-3">
                                        <form action="/xpora/detail_akun/update_siup" method="post" enctype="multipart/form-data">
                                            <div class="col-sm-4 text-secondary">
                                                <label for="siup">No. SIUP</label>
                                                <input type="text" class="form-control" name="siup" id="siup" value=<?php echo $key["no_siup"]; ?>>
                                            </div>
                                            <div class="checkbox">
                                                <label for="qyc">QYC Check</label>
                                                <select name="qyc" class="form-control" value=<?php echo $key['qyc_siup']; ?> id='qyc'>
                                                    <?php if ($key['qyc_siup'] === "1") { ?>
                                                        <option value="1" selected>Approved</option>
                                                        <option value="0">Not Approved</option>
                                                    <?php } else { ?>
                                                        <option value="1">Approved</option>
                                                        <option value="0" selected>Not Approved</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-2 text-secondary">
                                                <label for="foto">Proof Pict</label>
                                                <input type="file" id="foto" name="foto" class="form-control"></input>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="submit">Action</label>
                                                <button class="btn btn-primary" type="submit" id="submit">Upload</button>
                                            </div>
                                        </form>
                                        <form action="/xpora/detail_akun/download_siup" method="post" enctype="multipart/form-data">
                                            <div cclass="col-sm-2 text-secondary">
                                                <button class="btn btn-success" type="submit" value=<?php echo $key["foto_siup"]; ?> name="download">Download</button>
                                            </div>
                                        </form>

                                    </div>


                                    <div class="row mb-3">
                                        <form action="/xpora/detail_akun/update_peb" method="post" enctype="multipart/form-data">
                                            <div class="col-sm-4 text-secondary">
                                                <label for="peb">No. PEB</label>
                                                <input type="text" class="form-control" name="peb" id="peb" value=<?php echo $key["no_peb"]; ?>>
                                            </div>
                                            <div class="checkbox">
                                                <label for="qyc">QYC Check</label>
                                                <select name="qyc" class="form-control" value=<?php echo $key['qyc_peb']; ?> id='qyc'>
                                                    <?php if ($key['qyc_peb'] === "1") { ?>
                                                        <option value="1" selected>Approved</option>
                                                        <option value="0">Not Approved</option>
                                                    <?php } else { ?>
                                                        <option value="1">Approved</option>
                                                        <option value="0" selected>Not Approved</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-2 text-secondary">
                                                <label for="foto">Proof Pict</label>
                                                <input type="file" id="foto" name="foto" class="form-control"></input>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="submit">Action</label>
                                                <button class="btn btn-primary" type="submit" id="submit">Upload</button>
                                            </div>
                                        </form>
                                        <form action="/xpora/detail_akun/download_domisili" method="post" enctype="multipart/form-data">
                                            <div cclass="col-sm-2 text-secondary">
                                                <button class="btn btn-success" type="submit" value=<?php echo $key["foto_domisili"]; ?> name="download">Download</button>
                                            </div>
                                        </form>

                                    </div>


                                    <div class="row mb-3">
                                        <form action="/xpora/detail_akun/update_akta" method="post" enctype="multipart/form-data">
                                            <div class="col-sm-4 text-secondary">
                                                <label for="alta">No. Akta Perusahaan</label>
                                                <input type="text" class="form-control" name="akta" id="akta" value=<?php echo $key["no_akta"]; ?>>
                                            </div>
                                            <div class="checkbox">
                                                <label for="qyc">QYC Check</label>
                                                <select name="qyc" class="form-control" value=<?php echo $key['qyc_akta']; ?> id='qyc'>
                                                    <?php if ($key['qyc_akta'] === "1") { ?>
                                                        <option value="1" selected>Approved</option>
                                                        <option value="0">Not Approved</option>
                                                    <?php } else { ?>
                                                        <option value="1">Approved</option>
                                                        <option value="0" selected>Not Approved</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-2 text-secondary">
                                                <label for="foto">Proof Pict</label>
                                                <input type="file" id="foto" name="foto" class="form-control"></input>

                                            </div>
                                            <div class="col-sm-2">
                                                <label for="submit">Action</label>
                                                <button class="btn btn-primary" type="submit" id="submit">Upload</button>
                                            </div>
                                        </form>
                                        <form action="/xpora/detail_akun/download_akta" method="post" enctype="multipart/form-data">
                                            <div cclass="col-sm-2 text-secondary">
                                                <button class="btn btn-success" type="submit" value=<?php echo $key["foto_akta"]; ?> name="download">Download</button>
                                            </div>
                                        </form>

                                    </div>


                                    <div class="row mb-3">
                                        <form action="/xpora/detail_akun/update_domisili" method="post" enctype="multipart/form-data">
                                            <h5 class="font-weight-bold">Keberadaan Usaha</h5>
                                            <div class="col-sm-12 text-secondary">
                                                <input type="text" class="form-control" placeholder="Alamat" name="domisili" value="<?php foreach ($verif as $key) {
                                                                                                                                        echo $key['domisili_perusahaan'];
                                                                                                                                    } ?>"></input>
                                            </div>
                                    </div>
                                    <div class="row mb-3">

                                        <div class="checkbox">
                                            <select name="qyc" class="form-control" value=<?php echo $key['qyc_domisili']; ?> id='qyc'>
                                                <?php if ($key['qyc_domisili'] === "1") { ?>
                                                    <option value="1" selected>Approved</option>
                                                    <option value="0">Not Approved</option>
                                                <?php } else { ?>
                                                    <option value="1">Approved</option>
                                                    <option value="0" selected>Not Approved</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <input type="file" id="foto" name="foto" class="form-control"></input>
                                        </div>
                                        <div class="col-sm-2">
                                            <button class="btn btn-secondary" type="submit">Upload</button>
                                        </div>
                                        </form>
                                        <form action="/xpora/detail_akun/download_akta" method="post" enctype="multipart/form-data">
                                            <div cclass="col-sm-2 text-secondary">
                                                <button class="btn btn-success" type="submit" value=<?php echo $key["foto_akta"]; ?> name="download">Download</button>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        <?php } ?>
                        <h5 class="font-weight-bold">Riwayat ekspor</h5>
                        <div class="card">
                            <?php
                            $number = 0;
                            foreach ($ekspor as $riwayat_ekspor) {
                            ?>
                                <div class="card-body">
                                    <h6 class="font-weight-bold">Ekspor <?php
                                                                        $number += 1;
                                                                        echo $number;
                                                                        ?></h6>
                                    <div class="row mb-3">
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Komoditas" value="<?php
                                                                                                                    echo $riwayat_ekspor['komoditas'];
                                                                                                                    ?>">
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Incoterm" value="<?php
                                                                                                                    echo $riwayat_ekspor['incoterm'];
                                                                                                                    ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Negara tujuan" value="<?php
                                                                                                                        echo $riwayat_ekspor['negara_tujuan'];
                                                                                                                        ?>">
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Shipment" value="<?php
                                                                                                                    echo $riwayat_ekspor['shipment'];
                                                                                                                    ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Qty Komoditas" value="<?php
                                                                                                                        echo $riwayat_ekspor['qty'];
                                                                                                                        ?>">
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Amount" value="<?php
                                                                                                                echo $riwayat_ekspor['amount'];
                                                                                                                ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Frekuensi ekspor" value=" <?php
                                                                                                                            echo $riwayat_ekspor['frekuensi'];
                                                                                                                            ?>">
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Frekuensi ekspor" value=" <?php
                                                                                                                            echo $riwayat_ekspor['frekuensi'];
                                                                                                                            ?>">
                                        </div>
                                    </div>
                                    <?php
                                    $no = 1;
                                    foreach ($img_riwayat as $img) {
                                        if ($img['id_riwayat'] == $number) { ?>
                                            <form action="/xpora/detail_akun/upd_riwayat_img" method="post" enctype="multipart/form-data">
                                                <div class="row mb-3">
                                                    <label for="img">Proof Pict <?php //echo $no; 
                                                                                ?></label>
                                                    <div class="col-sm-5 text-secondary">
                                                        <input type="file" class="form-control" placeholder="Proof pict" id="img" name="img">
                                                    </div>
                                                    <div class="sm-5">
                                                        <button class="btn btn-primary" type="submit" name="val" value="<?php echo $img['id_riwayat_image'];
                                                                                                                        ?></label>">Update Proof Pict</button>
                                                    </div>
                                            </form>
                                            <form action="/xpora/detail_akun/download_riwayat" method="post" enctype="multipart/form-data">
                                                <div cclass="col-sm-2 text-secondary">
                                                    <button class="btn btn-success" type="submit" value=<?php echo $img['image']; ?> name="download"><img src="https://cdn-icons-png.flaticon.com/512/0/532.png" alt="" height="30" width="30"></button>
                                                </div>
                                            </form>
                                </div>
                        <?php }
                                        $no++;
                                    } ?>
                        <form action="/xpora/detail_akun/set_riwayat_img" method="post" enctype="multipart/form-data">
                            <br>
                            <div class="row mb-3">
                                <label for="img">New Proof Pict</label>
                                <div class="col-sm-5 text-secondary">
                                    <input type="file" id="img" name="img" class="form-control"></input>
                                </div>
                                <div class="sm-2">
                                    <button class="btn btn-primary" type="submit" name="val" value="<?php echo $number; ?>">Upload Proof Pict</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    <?php
                            }
                    ?>
                    <form action="/xpora/detail_akun/set_riwayat" method="post" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card text-dark bg-light mb-3">

                                <h6 class="font-weight-bold">Ekspor Baru
                                    <div class="row mb-3">
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Komoditas" name="komoditas">
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Incoterm" name="incoterm">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Negara tujuan" name="tujuan">
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Shipment" name="shipment">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Qty Komoditas" name="qty">
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Amount" name="amount">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Frekuensi ekspor" name="frekuensi">
                                        </div>
                                        <div class="col-sm-6 text-secondary">
                                            <input type="text" class="form-control" placeholder="Frekuensi ekspor" name="frekuensi">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-5 text-secondary">
                                            <input type="file" class="form-control" placeholder="Proof pict">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-12 text-secondary text-center">
                                            <button class="btn btn-secondary" type="submit">Tambah</button>
                                        </div>
                                    </div>
                            </div>
                    </form>
                        </div>
                        <h5 class="font-weight-bold">Kuantitas dan Kualitas ekspor</h5>
                        <?php
                        $nomor = 1;
                        foreach ($kuantitas as $qty) {
                        ?>
                            <form action="/xpora/detail_akun/upd_kuantitas" method="post" enctype="multipart/form-data">

                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold">Komoditas <?php
                                                                                echo $nomor;
                                                                                ?> </h6>
                                        <div class="row mb-3">
                                            <div class="col-sm-5 text-secondary">
                                                <input type="text" class="form-control" placeholder="Nama komoditas" name="nama" value="<?php
                                                                                                                                        echo $qty['nama_komoditas'];
                                                                                                                                        ?>">
                                            </div>
                                            <div class="col-sm-5 text-secondary">
                                                <input type="text" class="form-control" placeholder="kuantitas" name="qty" value="<?php
                                                                                                                                    echo $qty['kuantitas'];
                                                                                                                                    ?>">
                                            </div>
                                            <div class="col-sm-2 text-secondary">
                                                <input type="text" class="form-control" placeholder="Unit" name="unit" value="<?php
                                                                                                                                echo $qty['unit'];
                                                                                                                                ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3 text-secondary">
                                                <input type="text" class="form-control" placeholder="Grade" name="grade" value="<?php
                                                                                                                                echo $qty['kestabilan_gradeone'];
                                                                                                                                ?>">
                                            </div>
                                            <div class="col-sm-3 text-secondary">
                                                <input type="file" class="form-control" placeholder="Proof pict" name="img">
                                            </div>
                                            <div class="col-sm-2">
                                                <button class="btn btn-secondary" name="id_qty" type="submit" value="<?php
                                                                                                                        echo $qty['id_kuantitas'];
                                                                                                                        ?>">Update</button>
                                            </div></form>
                                            <form action="/xpora/detail_akun/download_kuantitas" method="post" enctype="multipart/form-data">
                                                <div cclass="col-sm-2 text-secondary">
                                                    <button class="btn btn-success" type="submit" value=<?php echo $qty['foto_gradeone']; ?> name="download">Download</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            

                        <?php } ?>

                        <form action="/xpora/detail_akun/set_kuantitas" method="post" enctype="multipart/form-data">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="font-weight-bold">Komoditas Baru</h6>
                                    <div class="row mb-3">
                                        <div class="col-sm-5 text-secondary">
                                            <input type="text" class="form-control" placeholder="Nama komoditas" name="nama">
                                        </div>
                                        <div class="col-sm-5 text-secondary">
                                            <input type="text" class="form-control" placeholder="kuantitas" name="qty">
                                        </div>
                                        <div class="col-sm-2 text-secondary">
                                            <input type="text" class="form-control" placeholder="Unit" name="unit">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3 text-secondary">
                                            <input type="text" class="form-control" placeholder="Grade" name="grade">
                                        </div>
                                        <div class="col-sm-3 text-secondary">
                                            <input type="file" class="form-control" placeholder="Proof pict" name="img">
                                        </div>
                                        <div class="col-sm-12 text-secondary text-center">
                                            <br>
                                            <button class="btn btn-secondary" type="submit">Tambah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </tr>

        </tbody>
        <!-- akhir tbody -->
</table>