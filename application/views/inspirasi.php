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
    <a class="nav-link " href="">User Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href=<?= site_url('detail_akun'); ?>>Verification Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href=<?= site_url('c_ekspansibisnis'); ?>>Ekspansi Bisnis</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="<?= site_url('inspirasi'); ?>">Inspirasi</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= site_url('produk_bni'); ?>">Produk BNI</a>
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
                  <form action="/xpora/inspirasi/excel_verif">
                      <button class="btn btn-secondary" type="submit" style="font-size: 12px;">Download all data</button>
                    </form>
                    
                  </div>
                  <div class="mt-2">
                    <form action="/xpora/inspirasi/excel_verif">
                      <button class="btn btn-secondary" type="submit" style="font-size: 12px;">Download product data</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper">
            <table class="table-striped">
                <thead>
                    <th>
                        <div class="rounded form-group">
                            <form action="<?= base_url('inspirasi/cari') ?>" method="post">
                                <input type="search" name="id_kelas" class="form-control rounded" placeholder="Nama Kelas" aria-label="Search" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <button type="submit" class="btn btn-secondary btn-sm">Search</button>
                                </span>
                            </form>
                        </div>
                    </th>
                    <th>
                        <div class="rounded form-group">
                            <form action="<?= base_url('inspirasi/cari') ?>" method="post">
                                <input type="search" name="nama_kelas" class="form-control rounded" placeholder="Nama Kelas" aria-label="Search" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <button type="submit" class="btn btn-secondary btn-sm">Search</button>
                                </span>
                            </form>
                        </div>
                    </th>
                    <th>
                        <div class="rounded form-group">
                            <form action="<?= base_url('inspirasi/cari') ?>" method="post">
                                <input type="search" name="kategory" class="form-control rounded" placeholder="Kategori" aria-label="Search" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <button type="submit" class="btn btn-secondary btn-sm">Search</button>
                                </span>
                            </form>
                        </div>
                    </th>
                    <th>
                        <div class="rounded form-group">
                            <form action="<?= base_url('inspirasi/cari') ?>" method="post">
                                <input type="search" name="level" class="form-control rounded" placeholder="Level" aria-label="Search" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <button type="submit" class="btn btn-secondary btn-sm">Search</button>
                                </span>
                            </form>
                        </div>
                    </th>
                    <th>
                        <div class="rounded form-group">
                            <form action="<?= base_url('inspirasi/cari') ?>" method="post">
                                <input type="search" name="start_date" class="form-control rounded" placeholder="Start Date" aria-label="Search" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <button type="submit" class="btn btn-secondary btn-sm">Search</button>
                                </span>
                            </form>
                        </div>
                    </th>
                    <th>
                        <div class="rounded form-group">
                            <form action="<?= base_url('inspirasi/cari') ?>" method="post">
                                <input type="search" name="progres" class="form-control rounded" placeholder="Progress" aria-label="Search" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <button type="submit" class="btn btn-secondary btn-sm">Search</button>
                                </span>
                            </form>
                        </div>
                    </th>
                    <th>
                        <div class="rounded form-group">
                            <form action="<?= base_url('inspirasi/cari') ?>" method="post">
                                <input type="search" name="finish_date" class="form-control rounded" placeholder="Finish Date" aria-label="Search" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <button type="submit" class="btn btn-secondary btn-sm">Search</button>
                                </span>
                            </form>
                        </div>
                    </th>
                  
                </thead>
                <!-- awalan Tbody -->
                <tbody>
                <?php foreach ($inspirasi->result()  as $row) : ?>
                        <tr>
                            <td><input type="checkbox" id="checkbox" name="checkbox[]" value="<?php echo $row->id_inspirasi; ?>"></td>
                            <td><?php echo $row->nama_kelas; ?></td>
                            <td><?php echo $row->kategory; ?></td>
                            <td><?php echo $row->level; ?></td>
                            <td><?php echo $row->start_date; ?></td>
                            <td><?php echo $row->progres; ?></td>
                            <td><?php echo $row->finish_date; ?></td>
                        </tr>
                    <?php endforeach; ?>
                        
                                

                    <tr>
                        <td colspan="12">
                            <input type="submit" value="Download Inpirasi" name="generatereport" formaction="<?php echo site_url('controllers/inspirasi/fetchDataFromTable'); ?>">
                        </td>
                        <td colspan="12">
                            <input type="submit" value="Download All" name="generatereport" formaction="<?php echo site_url('inspirasi/fetchDataFromTable'); ?>">
                        </td>
                    </tr>
                </tbody>
                <!-- akhir tbody -->
            </table>
            <!-- Page -->
            <div class="clearfix mt-3" id="merak">
                <!-- <ul class="pagination justify-content-center">
                    <li class="page-item disabled m-1"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                  </ul> -->
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>