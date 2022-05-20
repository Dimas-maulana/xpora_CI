<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th rowspan="2" class="align-middle">#</th>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Company Name</th>
                        <th>Region</th>
                        <th>Verification</th>


                        <th rowspan="2" class="align-middle">Action</th>
                    </tr>
                    <tr>
                        <th class="searchHeader">User ID</th>
                        <th class="searchHeader">User Name</th>
                        <th class="searchHeader">Company Name</th>
                        <th class="searchHeader">Region</th>
                        <th class="searchHeader">Verification</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($proses_verifikasi as $rs) : ?>
                        <tr>
                            <td style="text-align:right; white-space:nowrap;"><input class="form-check-input" type="checkbox" onclick="csData(this)" value="option1"></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->kd_data_diri; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->nama_pemilik; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->nama_usaha; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->domisili_perusahaan; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"> 
                            <?php 
                            if ($rs->verifikasi == 0) { ?>
                                    <a href="<?= site_url('detail_akun'); ?>" class="btn btn-warning btn-sm" style="width: 100%;">Need to Verification </a>
                                <?php } 
                                else { ?> <div style="color:green; text-align:center;"> Verified</div> <?php } ?>
                            </td>
                            <td style="vertical-align: middle; text-align:center; white-space:nowrap;" onclick="sData(this)">
<<<<<<< HEAD
                                <a  href="#deleteEmployeeModal" class="btn btn-info btn-sm" data-toggle="modal">Chose</a>
=======
                                <a href="#deleteEmployeeModal" class="btn btn-info btn-sm" data-toggle="modal">Chose</a>
>>>>>>> 94c397ee8d02c88dc29aa241fe7bc4ec87427e6c
                            </td>

                            <td style="text-align:center; white-space:nowrap;">
                                <a href="<?= site_url('detail_akun'); ?>" class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal HTML -->
<<<<<<< HEAD
<div div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog modal-lg" style="width:950px;">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h5>Assigned officer</h5>
                                    </div>
                                    <?php
                                    foreach ($officer as $key) {
                                    ?>
                                        <form action="/xpora/detail_akun/set_officer" method="post" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-sm-12 text-secondary">
                                                    
                                                        <fieldset disabled>
                                                            <label for="disabledTextInput" class="form-label">Negara</label>
                                                            <input type="text" id="disabledTextInput" class="form-control disabled" placeholder="<?php foreach ($officer as $office) {
                                                                                                                                                        echo $office['negara'];
                                                                                                                                                    } ?>">
                                                        </fieldset>
                                                    
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-12 text-secondary">
                                                   
                                                        <fieldset disabled>
                                                            <label for="disabledTextInput" class="form-label">Kota</label>
                                                            <input type="text" id="disabledTextInput" class="form-control disabled" placeholder="<?php foreach ($officer as $office) {
                                                                                                                                                        echo $office['kota'];
                                                                                                                                                    } ?>">
                                                        </fieldset>
                                                    
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-12 text-secondary">
                                                    
                                                        <fieldset disabled>
                                                            <label for="disabledTextInput" class="form-label">Nama</label>
                                                            <input type="text" id="disabledTextInput" class="form-control disabled" placeholder="<?php foreach ($officer as $office) {
                                                                                                                                                        echo $office['nama'];
                                                                                                                                                    } ?>">
                                                        </fieldset>
                                                    

                                                </div>
                                            </div><?php
                                    }
                                                    ?>
          </table>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Ok" />
        </div>
      </form>
    </div>
  </div>
=======
    <div div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog modal-lg" style="width:950px;">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5>Assign officer</h5>
                    </div>

                    <form action="/xpora-dashboard-ukm/proses_verifikasi/set_officer" method="post">
                        <label for="negara">Negara</label>
                        <select name="negara" id="negara">
                            <option value="">Negara</option>
                            <option value="idonesia">Indonesia</option>
                            <option value="malaysia">Malaysia</option>
                            <option value="singapura">Singapura</option>
                            <option value="vietnam">Vietnam</option>
                        </select>
                        <label for="kota">Kota</label>
                        <select name="kota" id="kota">
                            <option value="">Kota</option>
                            <option value="jakarta">Jakarta</option>
                            <option value="kuala_lumpur">Kuala Lumpur</option>
                            <option value="abc">abc</option>
                            <option value="vietnam">Vietnam</option>
                        </select>
                        <label for="nama">Nama</label>
                        <select name="nama" id="nama">
                            <option value="">Nama</option>
                            <option value="dinda">Dinda</option>
                            <option value="dimas">Dimas</option>
                            <option value="dira">Dira</option>
                            <option value="zaki">Zaki</option>
                            <option value="ekil">Ekil</option>
                        </select>
                        <button class="btn btn-success" type="submit" >Download</button>
                    </form>
                    
                    
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Ok" />
            </div>
            </form>
        </div>
    </div>
>>>>>>> 94c397ee8d02c88dc29aa241fe7bc4ec87427e6c
</div>