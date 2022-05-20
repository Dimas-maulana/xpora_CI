<div class="card shadow mb-4">
    <div class="card-body">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Draft</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Waiting for Approval</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Posted</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Un-Posted</a>
            </li>
        </ul>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th rowspan="2" class="align-middle">#</th>
                        <th>Commodity Posted ID</th>
                        <th>Commodity Name</th>
                        <th>User ID</th>
                        <th>Commodities ID</th>
                        <th>Exwork Price</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Application</th>
                        <th>Create Date</th>
                        <th>HS Code</th>
                        <th rowspan="2" class="align-middle">Action</th>
                    </tr>
                    <tr>
                        <th class="searchHeader">Commodity Posted ID</th>
                        <th class="searchHeader">Commodity Name</th>
                        <th class="searchHeader">User ID</th>
                        <th class="searchHeader">Commodities ID</th>
                        <th class="searchHeader">Exwork Price</th>
                        <th class="searchHeader">Category</th>
                        <th class="searchHeader">Status</th>
                        <th class="searchHeader">Application</th>
                        <th class="searchHeader">Create Date</th>
                        <th class="searchHeader">HS Code</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($commodities as $rs) : ?>
                        <tr onclick="sData(this)">
                            <td style="text-align:right; white-space:nowrap;"><input class="form-check-input" type="checkbox" onclick="csData(this)" value="option1"></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->comodity_posted_id; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->comodity_name; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->user_id; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->comodities_id; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->exwork_price; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->category; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->status; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->application; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->create_date; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->hs_code; ?></td>
                            <td style="text-align:center; white-space:nowrap;">
                                <a href="#" class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>