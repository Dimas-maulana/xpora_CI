<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th rowspan="2" class="align-middle">#</th>
                        <th>Matchmaking ID</th>
                        <th>Seller ID</th>
                        <th>Buyer ID</th>
                        <th>Destination</th>
                        <th>Commodity</th>
                        <th>Status</th>
                        <th>Payment System</th>
                        <th>Value</th>
                        <th>Application Date</th>
                        <th rowspan="2" class="align-middle">Action</th>
                    </tr>
                    <tr>
                        <th class="searchHeader">Matchmaking ID</th>
                        <th class="searchHeader">Seller ID</th>
                        <th class="searchHeader">Buyer ID</th>
                        <th class="searchHeader">Destination</th>
                        <th class="searchHeader">Commodity</th>
                        <th class="searchHeader">Status</th>
                        <th class="searchHeader">Payment System</th>
                        <th class="searchHeader">Value</th>
                        <th class="searchHeader">Application Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($ekspansimatchmaking as $rs) : ?>
                        <tr onclick="sData(this)">
                            <td style="text-align:right; white-space:nowrap;"><input class="form-check-input" type="checkbox" onclick="csData(this)" value="option1"></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->matchmaking_id; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->seller_id; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->buyer_id; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->destination; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->comodity; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->status; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->payment_system; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->value; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->application_date; ?></td>
                            <td style="text-align:center; white-space:nowrap;">
                                <a href="akun/detail_akun/<?= $rs->matchmaking_id ?>" class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>

                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Anda Yakin Ingin Menghapus Data Berikut:</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label>Nik : <?= $rs->nik; ?> </label> <br>
                                        <label>Nama Pemilik : <?= $rs->nama_pemilik; ?></label> <br>
                                        <label>Nama Usaha : <?= $rs->nama_usaha; ?></label> <br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                        <a href="akun/delete_akun/<?= $rs->kd_data_diri ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>