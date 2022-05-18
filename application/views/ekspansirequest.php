<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th rowspan="2" class="align-middle">#</th>
                        <th>Commodity Name</th>
                        <th>User ID</th>
                        <th>Request ID</th>
                        <th>Destination</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Application</th>
                        <th>Payment</th>
                        <th>Create Date</th>
                        <th rowspan="2" class="align-middle">Action</th>
                    </tr>
                    <tr>
                        <th class="searchHeader">Commodity Name</th>
                        <th class="searchHeader">User ID</th>
                        <th class="searchHeader">Request ID</th>
                        <th class="searchHeader">Destination</th>
                        <th class="searchHeader">Category</th>
                        <th class="searchHeader">Status</th>
                        <th class="searchHeader">Application</th>
                        <th class="searchHeader">Payment</th>
                        <th class="searchHeader">Create Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($ekspansirequest as $rs) : ?>
                        <tr onclick="sData(this)">
                            <td style="text-align:right; white-space:nowrap;"><input class="form-check-input" type="checkbox" onclick="csData(this)" value="option1"></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->comodity_name; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->user_id; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->request_id; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->destination; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->category; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->status; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->application; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->payment; ?></td>
                            <td style="vertical-align: middle; white-space:nowrap;" onclick="sData(this)"><?= $rs->create_date; ?></td>
                            <td style="text-align:center; white-space:nowrap;">
                                <a href="#" class="btn btn-success btn-sm">Approve</a>
                                <a href="#" class="btn btn-danger btn-sm">Decline</a>
                                <a href="#deleteEmployeeModal" class="btn btn-info btn-sm" data-toggle="modal">Detail</a>
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
     <!-- Modal HTML -->
     <div  div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h4 class="modal-title">Detail Request</h4>
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
                                            <label class="custom-file-label" for="uploadImageFile">Choose file</label>
                                        </div>
                                    </div>  
                                  <div class="row mt-3 mb-2">
                                      <div class="col-sm-20 text-secondary">
                                          <input type="text" class="form-control" style="font-size: 8px;" placeholder="Waiting for approval">
                                        </div>
                                  </div>
                                    <div class="mt-2">
                                      <button class="btn btn-info" type="button" style="font-size: 8px;">Approve</button>
                                      <button class="btn btn-danger" type="button" style="font-size: 8px;">Decline</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="col-lg-8">
                            <div class="card">
                              <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-6 text-secondary">
                                        <p>Nama Komoditas</p>
                                        <p>Qty Komoditas</p>
                                        <p>Kategori Komoditas</p>
                                        <p>Negara Tujuan</p>
                                        <p>Incoterm</p>
                                        <p>Jenis Pembayaran</p>
                                        <p>Frekuensi Permintaaan</p>
                                        <p>Deskripsi Permintaan</p>
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