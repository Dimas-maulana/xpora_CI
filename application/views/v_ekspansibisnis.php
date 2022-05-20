<head>
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>

    .carousel-item{
    height: 130px;
    width: 200px;
} 
.carousel-item img{
    height: 130px;
    width: 200px;
}
</style>
<div style="margin-bottom: 10px;">
    <a href="<?= site_url('akun'); ?>"><img src="https://cdn0.iconfinder.com/data/icons/web-seo-and-advertising-media-1/512/218_Arrow_Arrows_Back-512.png" style="width: 20px; height: 20px;">Kembali</a>
</div>
<h5>Detail Account / Ekspansi Bisnis</h5>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="">User Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= site_url('detail_akun'); ?>">Verification Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href=<?= site_url('c_ekspansibisnis'); ?>>Ekspansi Bisnis</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= site_url('inspirasi'); ?>">Inspirasi</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= site_url('produk_bni'); ?>">Produk BNI</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= site_url('c_clbrecord'); ?>">CLB Record</a>
  </li>
</ul>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
</div>
<table class="table-striped">
    <thead>
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://aecsp.qc.ca/wp-content/uploads/2021/03/person_icon-icons.com_50075.png" alt="Admin" class="rounded-circle p-1 " width="100" height="100">
                                </div>
                                <div style="padding-top:20px;">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <button type="button" class="btn btn-outline-primary btn-sm" style="margin-bottom: 10px; padding-right:55px;">Download All Data</button>
                                        <button type="button" class="btn btn-outline-info btn-sm" style="padding-right:39.5px;">Download User Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-8">
                        <h5>Matchmaking log</h5>
                        <div class="card">
                            <class class="card-body">
                                <div class="row mb-3">
                                <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    </div>
                                    <div class="col-sm-4 text-secondary">
                                        <input type="text" class="form-control" placeholder="Nama Komoditas">
                                        <input type="text" class="form-control" placeholder="Kategory">
                                        <input type="text" class="form-control" placeholder="Status">
                                    </div>
                                    <div class="col-sm-4 text-secondary">
                                        <input type="text" class="form-control" placeholder="Buyer id">
                                        <input type="text" class="form-control" placeholder="Seller id">
                                        <input type="text" class="form-control" placeholder="Tanggal mulai">
                                    </div>
                                </div>
                                <div class="row mb-3 float-lg-right">
                                    <div class="mt-2">
                                        <input type="text" placeholder="Assign officer">
                                        <button class="btn btn-secondary" type="button" style="text-align: end; font-size: 15px; padding: 5px 100px;">Search</button>
                                    </div>
                                </div>
                                <div class="row mb-3 float-lg-right">
                                    <div class="mt-2">
                                        <input type="text" placeholder="">
                                        <button class="btn btn-secondary">Done</button>
                                    </div>
                                    <div class="mt-2">
                                        <button class="btn btn-secondary">Cancel</button>
                                    </div>
                                    <div class="mt-2">
                                    <a href="#deleteEmployeeModal" class="btn btn-secondary" data-toggle="modal">Detail</a>
                                    </div>
                                </div>
                        </div>
                        <div class="card">
                            <class class="card-body">
                                <div class="row mb-3">
                                <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    </div>
                                    <div class="col-sm-4 text-secondary">
                                        <input type="text" class="form-control" placeholder="Nama Komoditas">
                                        <input type="text" class="form-control" placeholder="Kategory">
                                        <input type="text" class="form-control" placeholder="Status">
                                    </div>
                                    <div class="col-sm-4 text-secondary">
                                        <input type="text" class="form-control" placeholder="Buyer id">
                                        <input type="text" class="form-control" placeholder="Seller id">
                                        <input type="text" class="form-control" placeholder="Tanggal mulai">
                                    </div>
                                </div>
                                <div class="row mb-3 float-lg-right">
                                    <div class="mt-2">
                                        <input type="text" placeholder="Assign officer">
                                        <button class="btn btn-secondary" type="button" style="text-align: end; font-size: 15px; padding: 5px 100px;">Search</button>
                                    </div>
                                </div>
                                <div class="row mb-3 float-lg-right">
                                    <div class="mt-2">
                                        <input type="text" placeholder="">
                                        <button class="btn btn-secondary">Done</button>
                                    </div>
                                    <div class="mt-2">
                                        <button class="btn btn-secondary">Cancel</button>
                                    </div>
                                    <div class="mt-2">
                                    <a href="#deleteEmployeeModal" class="btn btn-secondary" data-toggle="modal">Detail</a>
                                    </div>
                                </div>
                        </div>


                        <div class="col-lg-20">
                            <h5>Commodities Post</h5>
                            <div class="card">
                                <div class="mt-2">
                                    <button class="btn btn-secondary" type="button" style="text-align: end; font-size: 10px; float: right;">Download</button>
                                    <button class="btn btn-secondary" type="button" style="text-align: end; font-size: 10px; float: right; margin-right: 1cm;">Select All</button>
                                </div>
                                <class class="card-body">
                                    <div class="row mb-3">
                                    <div id="carouselExampleControls2" class="carousel slide2" data-interval="false">
                                    <div class="carousel-inner2">
                                        <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    </div>
                                        <div class="col-sm-4 text-secondary">
                                            <input type="text" class="form-control" placeholder="Text Field">
                                            <input type="text" class="form-control" placeholder="Text Field">
                                            <input type="text" class="form-control" placeholder="Text Field">
                                            <a href="Detail-comodities-post.html">
                                            <a href="#deleteEmployeeModal2" class="btn btn-secondary" data-toggle="modal">Detail</a>
                                            </a>
                                            <p>Need Approval</p>
                                            <button class="btn btn-secondary" type="button">Approve</button>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <input type="text" class="form-control" placeholder="Text Field">
                                            <input type="text" class="form-control" placeholder="Text Field">
                                            <input type="text" class="form-control" placeholder="Text Field">
                                        </div>
                                    </div>
                            </div>
                            <div class="card">
                                <class class="card-body">
                                    <div class="row mb-3">
                                    <div id="carouselExampleControls3" class="carousel slide3" data-interval="false">
                                    <div class="carousel-inner3">
                                        <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    </div>
                                        <div class="col-sm-4 text-secondary">
                                            <input type="text" class="form-control" placeholder="Text Field">
                                            <input type="text" class="form-control" placeholder="Text Field">
                                            <input type="text" class="form-control" placeholder="Text Field">
                                            <a href="Detail-comodities-post.html">
                                            <a href="#deleteEmployeeModal2" class="btn btn-secondary" data-toggle="modal">Detail</a>
                                            </a>
                                            <p>Approved</p>
                                            <button class="btn btn-secondary" type="button">Take down</button>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <input type="text" class="form-control" placeholder="Text Field">
                                            <input type="text" class="form-control" placeholder="Text Field">
                                            <input type="text" class="form-control" placeholder="Text Field">
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-20">
                            <h5>Request Post</h5>
                            <div class="card">
                                <div class="mt-2">
                                    <button class="btn btn-secondary" type="button" style="text-align: end; font-size: 10px; float: right;">Download</button>
                                    <button class="btn btn-secondary" type="button" style="text-align: end; font-size: 10px; float: right;">Select All</button>
                                </div>
                                <class class="card-body">
                                    <div class="row mb-3">
                                    <div id="carouselExampleControls3" class="carousel slide3" data-interval="false">
                                    <div class="carousel-inner3">
                                        <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="https://praxis.co.id/media/image/161052138715ffe9b2bab481" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    </div>
                                        <div class="col-sm-4 text-secondary">
                                            <input type="text" class="form-control" placeholder="Nama Komoditas">
                                            <input type="text" class="form-control" placeholder="Qty Komoditas">
                                            <input type="text" class="form-control" placeholder="Status">
                                            <a href="Detail-request-post.html">
                                            <a href="#deleteEmployeeModal3" class="btn btn-secondary" data-toggle="modal">Detail</a>
                                            </a>
                                            <p>Need Approval</p>
                                            <button class="btn btn-secondary" type="button">Approve</button>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <input type="text" class="form-control" placeholder="Request id">
                                            <input type="text" class="form-control" placeholder="Tanggal pembuatan">
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
        </tr>

        </tbody>
        <!-- akhir tbody -->
</table>
<!-- Page -->
</div>
</div>
</div>


<!-- Modal Matchmaking Log -->
<div div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog modal-lg" style="width:950px;">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h4 class="modal-title">Detail Matchmaking</h4>
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

<!-- Modal Commodities Post -->
<div div id="deleteEmployeeModal2" class="modal fade">
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

<!-- Modal Request Post -->
<div div id="deleteEmployeeModal3" class="modal fade">
            <div class="modal-dialog modal-lg" style="width:950px;">
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
                                        <p>Qty komoditas</p>
                                        <p>Kategory komoditas</p>
                                        <p>Negara tujuan</p>
                                        <p>Incoterm</p>
                                        <p>Jenis pembayaran</p>
                                        <p>Frekuensi permintaan</p>
                                        <p>Deskripsi permintaan</p>
                                    </div>
                                    <div class="col-sm-6 text-secondary">
                                        <p>: Sarang Burung Walet</p>
                                        <p>: 200 kg</p>
                                        <p>: Peternakan</p>
                                        <p>: Australia</p>
                                        <p>: FOB</p>
                                        <p>: LC</p>
                                        <p>: 2 kali sebulan</p>
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

<script>

</script>