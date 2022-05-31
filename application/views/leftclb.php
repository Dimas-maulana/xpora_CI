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
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>