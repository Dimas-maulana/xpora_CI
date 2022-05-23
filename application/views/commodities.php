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
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Approve</button>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal2">Decline</button>
                                <a href="#deleteEmployeeModal" class="btn btn-info btn-sm" data-toggle="modal">Detail</a>
                            </td>
                        </tr>

                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" style="width:950px;">
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

<div div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog modal-lg" style="width:950px;">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h4 class="modal-title">Detail Commodities</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                  <table class="table-striped">
                  <thead>
                    <div class="container">
                      <div class="main-body">
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                  <div class="d-flex flex-column align-items-center text-center">
                                  <img src="https://aecsp.qc.ca/wp-content/uploads/2021/03/person_icon-icons.com_50075.png" alt="Admin" class="rounded-circle p-1 " width="100">
                                  <div class="input-group lb-2">
                                        <div class="custom-file">
                                            <input class="custom-file-input" type="file" id="uploadImageFile" name="userfiles" onchange="showImage()" accept=".jpg, .png" aria-describedby="inputGroupFileAddon01" required>
                                            <label class="custom-file-label" for="uploadImageFile">Upload Berkas Disini!</label>
                                        </div>
                                    </div>  
                                  <div class="row mt-3 mb-2">
                                      <div class="col-sm-20 text-secondary">
                                          <input type="text" class="form-control" placeholder="Waiting for approval">
                                        </div>
                                  </div>
                                    <div class="mt-2">
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Approve</button>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal2">Decline</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="col-lg-8">
                            <div class="card">
                              <div class="card-body">
                                <div class="row mb-6">
                                    <div class="col-sm-6 text-secondary">
                                        <p>Nama Komoditas</p>
                                        <p>Kategori Komoditas</p>
                                        <p>Harga Exwork Komoditas</p>
                                        <p>Kapasitas komoditas</p>
                                        <p>Minimum order qty</p>
                                        <p>Packaging</p>
                                        <p>HS Code</p>
                                        <p>Detail spesifikasi</p>
                                    </div>
                                    <div class="col-sm-6 text-secondary">
                                        <p>: Sarang Burung Walet</p>
                                        <p>: Peternakan</p>
                                        <p>: 120.000 per KG</p>
                                        <p>: 2 Ton</p>
                                        <p>: 100 Kg</p>
                                        <p>: Lorem ipsum</p>
                                        <p>: Kardus dan Kayu</p>
                                        <p>: Lorem ipsum</p>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </tr>
                    
                  </tbody> 
                  <!-- akhir tbody -->
                </table>
                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Ok" />
                  </div>
                </form>
              </div>
            </div>
          </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="modalapprove" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notifikasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Berhasil di Approve!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK!</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="modalapprove" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notifikasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Berhasil di Decline!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK!</button>
      </div>
    </div>
  </div>
</div>