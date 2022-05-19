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
<h5>Detail Account / CLB Record</h5>
<ul class="nav nav-tabs">
<li class="nav-item">
        <a class="nav-link " href="">User Data</a>
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
        <a class="nav-link <?= $clb_record ?>" href="<?= site_url('c_clbrecord'); ?>"><span>CLB Record</span></a>
    </li>
</ul>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
</div>
<div class="row">
<div class="col-lg-3">
        <div class="card">
            <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center" id="showImageHere">
                    <img src="https://aecsp.qc.ca/wp-content/uploads/2021/03/person_icon-icons.com_50075.png" alt="Admin" class="rounded-circle p-1 " width="150" height="150">
                </div>
                <div class="input-group lb-3">
                    <div class="custom-file">
                        <input class="custom-file-input" type="file" id="uploadImageFile" name="userfiles" onchange="showImage()" accept=".jpg, .png" aria-describedby="inputGroupFileAddon01" required>
                        <label class="custom-file-label" for="uploadImageFile">Choose file</label>
                    </div>
                </div>
                <div style="padding-top:20px;">
                    <button type="button" class="btn btn-outline-primary btn-sm" style="margin-bottom: 10px; padding-right:55px;">Download All Data</button>
                </div>
            </div>
        </div>
</div>
<div class="col-lg-9">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">CLB Record</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Attempt</th>
                        <th>Date</th>
                        <th>Type of test</th>
                        <th>Result</th>
                        <th>Recomendation</th>
                        <th>Follow up recomendation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ((array) $clb as $rs) : ?>
                        <tr>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->attempt; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->date; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->type_of_rest; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->result; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->recomendation; ?>
                            <a href="#deleteEmployeeModal" class="btn btn-info btn-sm" data-toggle="modal">3 More</a>
                            </td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->follow_up_recomendation; ?></td>
                            <td style="text-align:center; white-space:nowrap;">
                                <a href="c_clbrecord/detailakun/<?= $rs->attempt ?>" class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
                <!-- Delete Modal HTML -->
        <div  div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h4 class="modal-title">Recomendation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                      <button style="background-color: gray; color: white;">Ekspansi Bisnis</button>
                      <button style="background-color: gray; color: white;">Inspirasi</button>
                      <button style="background-color: gray; color: white;">Cek Level Bisnis</button>
                      <button style="background-color: gray; color: white;">Legalitas</button>
                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Ok" />
                  </div>
                </form>
              </div>
            </div>
          </div>
</div>
</div>
