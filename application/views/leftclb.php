<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th rowspan="2" class="align-middle">#</th>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Company Name</th>
                        <th>Number Attempt</th>
                        <th>Last Result</th>
                        <th>Follow Up Recomendation</th>
                        <th>Most Result</th>
                        <th>Last Attempt Date</th>
                        <th rowspan="2" class="align-middle">Action</th>
                    </tr>
                    <tr>
                        <th class="searchHeader">User ID</th>
                        <th class="searchHeader">User Name</th>
                        <th class="searchHeader">Company Name</th>
                        <th class="searchHeader">Number Attempt</th>
                        <th class="searchHeader">Last Result</th>
                        <th class="searchHeader">Follow Up Recomendation</th>
                        <th class="searchHeader">Most Result</th>
                        <th class="searchHeader">Last Attempt Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($leftclb as $rs) : ?>
                        <tr onclick="sData(this)">
                            <td style="text-align:right; white-space:nowrap;"><input class="form-check-input" type="checkbox" onclick="csData(this)" value="option1"></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->kd_data_diri; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->nama_pemilik; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->nama_usaha; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->number_attempt; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->result; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->follow_up_recomendation; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->result; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;"><?= $rs->date; ?></td>
                            <td style="text-align:center; white-space:nowrap;">
                                <a href="akun/detail_akun/<?= $rs->kd_data_diri ?>" class="btn btn-info btn-sm">Detail</a>
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