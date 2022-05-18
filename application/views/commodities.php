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
                        <th rowspan="2" class="align-middle">Action (Approve or Decline)</th>
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
                                <a href="#" class="btn btn-success btn-sm">Approve</a>
                                <a href="#" class="btn btn-danger btn-sm">Decline</a>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">Detail</button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail Commodity</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Approve</button>
                            <button type="button" class="btn btn-danger">Decline</button>
                        </div>
                        </div>
                    </div>
                    </div>
            </table>
        </div>
    </div>
</div>