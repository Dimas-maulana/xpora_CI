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
                        <th class="searchHeader">Verification</th>
                        <th class="searchHeader">Search</th>
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

                                <a href="<?php echo base_url('prosesVerifikasi'). $param; ?>" class="btn btn-warning btn-sm" style="width: 100%;">Need to Verification </a>
                                
                                
                                    <?php } else if ($rs->verifikasi == "On Progress") { ?> <a href="#" class="btn btn-info btn-sm" style="width: 100%;">On Progress </a>
                                <?php } else if ($rs->verifikasi == "Verified") { ?> <div style="color:green; text-align:center;"> Verified</div>
                                <?php } else { ?> <div style="color:red; text-align:center;"> Cancel</div> <?php } ?>
                            </td>
                            <td style="vertical-align: middle; text-align:center; white-space:nowrap;" onclick="sData(this)">
                                <a href="#" class="btn btn-dark btn-sm" style="width: 100%;">Chose</a>
                            </td>
                            <td style="vertical-align: middle; text-align:center; white-space:nowrap;" onclick="sData(this)"><?= $rs->priority; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->verifikasi_date; ?></td>
                            <td style="text-align:center; white-space:nowrap;">
                                <a href="detail_akun/index/<?= $rs->kd_data_diri ?>" class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>