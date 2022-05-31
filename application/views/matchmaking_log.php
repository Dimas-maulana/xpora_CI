<div class="card shadow mb-4">
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
                        <th class="searchHeader">Search</th>
                        <th class="searchHeader">Search</th>
                        <th class="searchHeader">Search</th>
                        <th class="searchHeader">Search</th>
                        <th class="searchHeader">Search</th>
                        <th class="searchHeader">Status</th>
                        <th class="searchHeader">Payment System</th>
                        <th class="searchHeader">Search</th>
                        <th class="searchHeader">Application Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($matchmaking_log as $rs) : ?>
                        <tr onclick="sData(this)">
                            <td style="text-align:right; white-space:nowrap;"><input class="form-check-input" type="checkbox" onclick="csData(this)" value="option1"></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->matchmaking_id; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->seller_id; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->buyer_id; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->destination; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->comodity; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->status; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->payment_system; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->value; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->application_date; ?></td>
                            <td style="text-align:center; white-space:nowrap;">
                                <a href="<?= site_url('matchmaking_log/detail/' . $rs->matchmaking_id) ?>" class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Detail Matchmaking Log</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="card">
                                            <div class="card-body">
                                                <center>
                                                    <div class="col-lg-4">
                                                        <div class="d-flex flex-column align-items-center text-center">
                                                            <img src="https://aecsp.qc.ca/wp-content/uploads/2021/03/person_icon-icons.com_50075.png" alt="Admin" class="rounded-circle p-1 " width="150" height="150">
                                                            <!-- <img src="<?= base_url('images/' . $row->foto) ?>" alt="Admin" class="rounded-circle p-1 " width="150" value="<?= $row->foto ?>"> -->
                                                        </div>
                                                    </div>
                                                </center>
                                                <img src="https://aecsp.qc.ca/wp-content/uploads/2021/03/person_icon-icons.com_50075.png" alt="Admin" class="rounded-circle p-1 " width="50" height="50">
                                                <img src="https://aecsp.qc.ca/wp-content/uploads/2021/03/person_icon-icons.com_50075.png" alt="Admin" class="rounded-circle p-1 " width="50" height="50">
                                                <img src="https://aecsp.qc.ca/wp-content/uploads/2021/03/person_icon-icons.com_50075.png" alt="Admin" class="rounded-circle p-1 " width="50" height="50">
                                                <img src="https://aecsp.qc.ca/wp-content/uploads/2021/03/person_icon-icons.com_50075.png" alt="Admin" class="rounded-circle p-1 " width="50" height="50">
                                                <img src="https://aecsp.qc.ca/wp-content/uploads/2021/03/person_icon-icons.com_50075.png" alt="Admin" class="rounded-circle p-1 " width="50" height="50">

                                                <div style="background-color: yellow; color:black; margin-bottom:15px; margin-top:15px">
                                                    Waiting For Approval
                                                </div>

                                                <button type="button" class="btn btn-success">Approve</button>
                                                <button type="button" class="btn btn-danger">Decline</button>
                                            </div>
                                        </div>

                                        <div class="col-lg-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-6 text-secondary">
                                                            <p>Nama Komoditas</p>
                                                            <p>Kategori Komoditas</p>
                                                            <p>Harga Exwork</p>
                                                            <p>Kapasitas Komoditas</p>
                                                            <p>Minimum Order QTY</p>
                                                            <p>Packaging</p>
                                                            <p>HS Code</p>
                                                            <p>Detail Spesifikasi</p>
                                                        </div>
                                                        <div class="col-sm-6 text-secondary">
                                                            <p>: Sarang Burung Walet</p>
                                                            <p>: 200 Kg</p>
                                                            <p>: Peternakan</p>
                                                            <p>: Australia</p>
                                                            <p>: FOB</p>
                                                            <p>: LC</p>
                                                            <p>: 2 Kali sebulan</p>
                                                            <p>: LoremIpsumLorem</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </tbody>
            </table>
        </div>
    </div>
</div>