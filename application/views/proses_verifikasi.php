<div class="card shadow mb-4">
    <div class="card-body">
        <button type="button" class="btn btn-dark" style="margin-bottom: 20px;">Assigned Selected User</button>
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
                        <th>Assigned Officer</th>
                        <th>Priority</th>
                        <th>Verification Date</th>
                        <th rowspan="2" class="align-middle">Action</th>
                    </tr>
                    <tr>
                        <th class="searchHeader">Search</th>
                        <th class="searchHeader">Search</th>
                        <th class="searchHeader">Search</th>
                        <th class="searchHeader">Search</th>
                        <th class="searchHeaderr">Verification</th>
                        <th class="searchHeader">Assigned Officer</th>
                        <th class="searchHeader">Priority</th>
                        <th class="searchHeader">Verification Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($proses_verifikasi as $rs) : ?>
                        <tr onclick="sData(this)">
                            <td style="text-align:right; white-space:nowrap;"><input class="form-check-input" type="checkbox" onclick="csData(this)" value="option1"></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->kd_data_diri; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->nama_pemilik; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->nama_usaha; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->domisili_perusahaan; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"> <?php if ($rs->verifikasi == "Verification") { ?>
                                    <a href="#" class="btn btn-warning btn-sm" style="width: 100%;">Need to Verification </a>
                                <?php } else { ?> <div style="color:green; text-align:center;"> Verified</div> <?php } ?>
                            </td>
                            <td style="vertical-align: middle; text-align:center; white-space:nowrap;" onclick="sData(this)">
                                <a  href="#deleteEmployeeModal" class="btn btn-info btn-sm" data-toggle="modal">Chose</a>
                            </td>
                            <td style="vertical-align: middle; text-align:center; white-space:nowrap;" onclick="sData(this)"><?= $rs->priority; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->verifikasi_date; ?></td>
                            <td style="text-align:center; white-space:nowrap;">
                                <a href="proses_verifikasi/detail_proses_verifikasi/<?= $rs->kd_data_diri ?>" class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal HTML -->
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
</div>