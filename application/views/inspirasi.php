<?php
$url = $this->uri->segment(1);
$clb_record = $url == "c_clbrecord" ? "menuActive" : "";
//if ($data->gambar != "") $gambar = explode(",", $data->gambar); //kenapa pake explode? karna pake koma di databasenya
//contoh: img_1.jpg, img_2.jpg dipisah setiap ada koma jadi index array, makenya explode
//kebalikannya namanya implode, dari array jadi string terus disimpen ke database
//else $gambar = array();
?>
<div style="margin-bottom: 10px;">
    <a href="<?= site_url('akun'); ?>"><img src="https://cdn0.iconfinder.com/data/icons/web-seo-and-advertising-media-1/512/218_Arrow_Arrows_Back-512.png" style="width: 20px; height: 20px;">Kembali</a>
</div>
<h5>Detail Account / Inspirasi</h5>
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('akun'); ?>/detail_akun/<?= $id ?>">User Data</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('detail_akun'); ?>/index/<?= $id ?>">Verification Data</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('c_ekspansibisnis'); ?>/index/<?= $id ?>">Ekspansi Bisnis</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="<?= site_url('inspirasi'); ?>/index/<?= $id ?>">Inspirasi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('produk_bni'); ?>/index/<?= $id ?>">Produk BNI</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('c_clbrecord'); ?>/index/<?= $id ?>">CLB Record</a>
    </li>
</ul>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center" id="showImageHere">
                    <img src="https://aecsp.qc.ca/wp-content/uploads/2021/03/person_icon-icons.com_50075.png" alt="Admin" class="rounded-circle p-1 " width="150" height="150">


                    <div style="padding-top:20px;">
                        <form action="<?= site_url('inspirasi'); ?>/excel_verif/<?php echo $id ?>">
                            <input type="hidden" value="<?php echo $id ?>" name="id">
                            <button class="btn btn-outline-primary btn-sm" type="submit" style="margin-bottom: 10px; padding-right:55px;">Download All Data</button>
                            <button class="btn btn-outline-primary btn-sm" type="submit" style="margin-bottom: 10px; padding-right:55px;">Download Filtered Data</button>
                        </form>
                        <!-- <button type="button" class="btn btn-outline-primary btn-sm" href="<?= base_url('akun/export') ?>" style="margin-bottom: 10px; padding-right:55px;">Download All Data </button>   
                <button type="button" class="btn btn-outline-primary btn-sm" href="<?= base_url('akun/export_filter/' . $this->session->userdata('cari')) ?>" style="margin-bottom: 10px; padding-right:55px;">Download Inspirasi</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Inspirasi</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tes" width="100%" cellspacing="0">

                        <thead>
                            <tr>
                                <th rowspan="2" class="align-middle">#</th>
                                <th>Nama Kelas</th>
                                <th>Kategori</th>
                                <th>Level</th>
                                <th>Start Date</th>
                                <th>Progress</th>
                                <th>Finish Date</th>
                            </tr>

                            <th>
                                <div class="rounded form-group">
                                    <form action="<?= base_url('inspirasi/cari') ?>" method="post">
                                        <input type="search" name="nama_kelas" class="form-control rounded" placeholder="Nama Kelas" aria-label="Search" aria-describedby="search-addon" />
                                    </form>
                                </div>
                            </th>
                            <th>
                                <div class="rounded form-group">
                                    <form action="<?= base_url('inspirasi/cari') ?>" method="post">
                                        <input type="search" name="kategory" class="form-control rounded" placeholder="Kategori" aria-label="Search" aria-describedby="search-addon" />

                                    </form>
                                </div>
                            </th>
                            <th>
                                <div class="rounded form-group">
                                    <form action="<?= base_url('inspirasi/cari') ?>" method="post">
                                        <input type="search" name="level" class="form-control rounded" placeholder="Level" aria-label="Search" aria-describedby="search-addon" />

                                    </form>
                                </div>
                            </th>
                            <th>
                                <div class="rounded form-group">
                                    <form action="<?= base_url('inspirasi/cari') ?>" method="post">
                                        <input type="search" name="start_date" class="form-control rounded" placeholder="Start Date" aria-label="Search" aria-describedby="search-addon" />

                                    </form>
                                </div>
                            </th>
                            <th>
                                <div class="rounded form-group">
                                    <form action="<?= base_url('inspirasi/cari') ?>" method="post">
                                        <input type="search" name="progres" class="form-control rounded" placeholder="Progress" aria-label="Search" aria-describedby="search-addon" />

                                    </form>
                                </div>
                            </th>
                            <th>
                                <div class="rounded form-group">
                                    <form action="<?= base_url('inspirasi/cari') ?>" method="post">
                                        <input type="search" name="finish_date" class="form-control rounded" placeholder="Finish Date" aria-label="Search" aria-describedby="search-addon" />

                                    </form>
                                </div>
                            </th>

                        </thead>
                        <!-- awalan Tbody -->
                        <tbody>

                            <?php foreach ((array)$inspirasi  as $row) : ?>
                                <?php if ($row == null) {
                                } else {
                                ?>

                                    <tr>
                                        <td><input type="checkbox" id="checkbox" name="checkbox" value="<?php echo $row->id_inspirasi; ?>"></td>
                                        <td><?php echo $row->nama_kelas; ?></td>
                                        <td><?php echo $row->kategory; ?></td>
                                        <td><?php echo $row->level; ?></td>
                                        <td><?php echo $row->start_date; ?></td>
                                        <td><?php echo $row->progres; ?></td>
                                        <td><?php echo $row->finish_date; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>



                            <?php endforeach; ?>




                        </tbody>
                        <!-- akhir tbody -->
                    </table>

                    </table>
                </div>
            </div>
        </div>
        <!-- Delete Modal HTML -->
        <div div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Recomendation</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <button style="background-color: gray; color: white;">Ekspansi Bisnis</button>
                            <button style="background-color: gray; color: white;">Inspirasi</button>
                            <button style="background-color: gray; color: white;">Cek Level Bisnis</button>
                            <button style="background-color: gray; color: white;">Legalitas</button>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Ok" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#tes').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy',
            'csv',
            'excel',
            'pdf',
            {
                extend: 'print',
                text: 'Print all (not just selected)',
                exportOptions: {
                    modifier: {
                        selected: null
                    }
                }
            }
        ],
        select: true
    } );
} );

</script>