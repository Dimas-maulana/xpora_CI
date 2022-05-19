<?php
//if ($data->gambar != "") $gambar = explode(",", $data->gambar); //kenapa pake explode? karna pake koma di databasenya
//contoh: img_1.jpg, img_2.jpg dipisah setiap ada koma jadi index array, makenya explode
//kebalikannya namanya implode, dari array jadi string terus disimpen ke database
//else $gambar = array();
?>
<div style="margin-bottom: 10px;">
  <a href="<?= site_url('akun'); ?>"><img src="https://cdn0.iconfinder.com/data/icons/web-seo-and-advertising-media-1/512/218_Arrow_Arrows_Back-512.png" style="width: 20px; height: 20px;">Kembali</a>
</div>
<h5>Detail Account / User Data</h5>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link " href=" site_url('detail_akun/DD0001')">User Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= site_url('detail_akun'); ?>">Verification Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href=<?= site_url('c_ekspansibisnis'); ?>>Ekspansi Bisnis</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= site_url('inspirasi'); ?>">Inspirasi</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="<?= site_url('produk_bni'); ?>">Produk BNI</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= site_url('c_clbrecord'); ?>">CLB Record</a>
  </li>
</ul>
</nav><!-- Begin Page Content -->
<table class="table-striped">
  <thead>
    <div class="container">
      <div class="main-body">
        <div class="row">
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="https://aecsp.qc.ca/wp-content/uploads/2021/03/person_icon-icons.com_50075.png" alt="Admin" class="p-1 bg-secondary" width="150">
                  <div class="mt-2">
                    <button class="btn btn-secondary" type="button" style="font-size: 12px" ;>Download all data</button>
                  </div>
                  <div class="mt-2">
                    <form action="/xpora/produk_bni/excel_verif">
                      <button class="btn btn-secondary" type="submit" style="font-size: 12px;">Download product data</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php foreach ($produk as $produk) {

          ?>
            <div class="col-lg-8">
              <h5>Penggunaan Produk BNI</h5>

              <div class="card">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col-sm-5 text-secondary">
                      <label for="">Jenis Rekening</label>
                      <input type="text" name="tabungan_bisnis" class="form-control" placeholder="Tabungan bisnis" value="<?php echo $produk["jenis_rek"]; ?>">
                    </div>
                    <div class="col-sm-4 text-secondary">
                      <label for="">No. Rekening</label>
                      <input type="text" name="no_rek" class="form-control" placeholder="No. rekening" value="<?php echo $produk["no_rek"]; ?>">
                    </div>
                    <div class="col-sm-3 text-secondary">
                      <label for="">CIF</label>
                      <input type="text" name="cif" class="form-control" placeholder="CIF" value="<?php echo $produk["cif"]; ?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col-sm-4 text-secondary">
                      <label for="">LC</label>
                      <input type="text" name="lc" class="form-control" placeholder="LC" value="<?php echo $produk["lc"]; ?>">
                    </div>
                    <div class="col-sm-5 text-secondary">
                      <label for="">Proof Pict</label>
                      <input type="file" name="foto" class="form-control" placeholder="Proof pict" value="<?php echo $produk["cif"]; ?>">

                      <form action="/xpora/produk_bni/download" method="post" enctype="multipart/form-data">
                        <div class="col-sm-2 text-secondary">
                          <button class="btn btn-success" type="submit" value=<?php echo $produk["foto"]; ?> name="download">Download</button>
                        </div>
                      </form>

                    </div>
                    <div class="col-sm-2 text-secondary">
                      <label for="">CIF</label>
                      <input type="text" name="cif" class="form-control" placeholder="CIF" value="<?php echo $produk["cif"]; ?>">
                    </div>
                    

                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col-sm-5 text-secondary">
                      <label for="">Jenis Rekening</label>
                      <input type="text" class="form-control" placeholder="Produk BNI" value="<?php echo $produk["jenis_rek"]; ?>">
                    </div>
                  </div>
                </div>
              </div>

            <?php } ?>



            </div>
        </div>
      </div>
    </div>
    </div>
    </div>



    <!-- Edit Modal HTML -->
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <div id="exampleModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h4 class="modal-title">Add Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" required />
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" required />
              </div>
              <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" required></textarea>
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" required />
              </div>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
              <input type="submit" class="btn btn-success" value="Add" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h4 class="modal-title">Edit Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" required />
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" required />
              </div>
              <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" required></textarea>
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" required />
              </div>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
              <input type="submit" class="btn btn-info" value="Save" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h4 class="modal-title">Delete Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete these Records?</p>
              <p class="text-warning"><small>This action cannot be undone.</small></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
              <input type="submit" class="btn btn-danger" value="Delete" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

    <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js">
      $(".hBack").on("click", function(e) {
        e.preventDefault();
        window.history.back();
      });
    </script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    </body>

    </html>