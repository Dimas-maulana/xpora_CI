<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
	<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
			class="fas fa-download fa-sm text-white-50"></i> </a>
</div>

<!-- Content Row -->
<div class="row">

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
							DIRECT EXPORTIR</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count['drct'] ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							INDIRECT EXPORTIR</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count['indrct'] ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-info text-uppercase mb-1">BUYER
						</div>
						<div class="row no-gutters align-items-center">
							<div class="col-auto">
								<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $count['buyer'] ?></div>
							</div>
						</div>
					</div>
					<div class="col-auto">
					<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>


  <!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							DIASPORA</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count['dspr'] ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Pending Requests Card Example -->
	<!-- <div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
							Pending Requests</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-comments fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div> -->
</div> 

<!-- Content Row -->

<div class="row">

	<!-- Area Chart -->
	<div class="col-xl-8 col-lg-7">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">REPORT STATISTICS INCOMING COMODITY (POSTED COMODITY)</h6>
				<div class="dropdown no-arrow">
					<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
						aria-labelledby="dropdownMenuLink">
						<div class="dropdown-header">Dropdown Header:</div>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<div class="chart-area" style="height:450px;">
					<canvas id="chart1"></canvas>
				</div>
			</div>
		</div>
	</div>

	<!-- Pie Chart -->
	<div class="col-xl-4 col-lg-5">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">LAST TRANSACTION</h6>
				<div class="dropdown no-arrow">
					<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
						aria-labelledby="dropdownMenuLink">
						<div class="dropdown-header">Dropdown Header:</div>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered datatable" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Komoditi</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
							<?php $i = 1; foreach($last5 as $value) { ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $value['nama_komodity'] ?></td>
                    <td><?= $value['tgl_transaksi'] ?></td>
                </tr>
							<?php } ?>
            </tbody>
          </table>
        </div>
			</div>
		</div>
	</div>
</div>

<div class="row">

	<!-- Bar Chart -->
	<div class="col-xl-8 col-lg-7">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">REPORT REVENUE TRANSACTION</h6>
				<div class="dropdown no-arrow">
					<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
						aria-labelledby="dropdownMenuLink">
						<div class="dropdown-header">Dropdown Header:</div>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>

			<!-- Card Body -->
			<div class="card-body">
				<div class="chart-area">
					<canvas id="myBarChart"></canvas>
				</div>
			</div>
		</div>
	</div><!-- Bar Chart -->
  
  <!-- Pie Chart -->
  <div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">PERCENTAGE COMPARISON</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Dropdown Header:</div>
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
      </div>
      <div class="card-body">
          <div class="pt-4 pb-2">
              <canvas id="polararea"></canvas>
          </div>
      </div>
    </div>
  </div>


	<div class="col-xl-8 col-lg-7">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">REPORT REVENUE OF BANK ACCOUNT</h6>
				<div class="dropdown no-arrow">
					<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
						aria-labelledby="dropdownMenuLink">
						<div class="dropdown-header">Dropdown Header:</div>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>

			<!-- Card Body -->
			<div class="card-body">
				<div class="chart-area">
					<canvas id="myBarChart2"></canvas>
				</div>
			</div>
		</div>
	</div>
<!-- Pie Chart -->
<div class="col-xl-4 col-lg-5">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">REQUESTS COMODITY</h6>
				<div class="dropdown no-arrow">
					<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
						aria-labelledby="dropdownMenuLink">
						<div class="dropdown-header">Dropdown Header:</div>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered datatable" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Matchmaking</th>
                    <th>Seller ID</th>
                    <th>Buyer ID</th>
                    <th>comodity</th>
                    <th>Request Total</th>
                    <th>Available Comodities</th>
                    <th>Status</th>
                    <th>Application Date</th>
                </tr>
            </thead>
            <tbody>
							<?php $i = 1; foreach($eksmatch as $value) { ?>
                <tr>
                    <td><?= $value['matchmaking_id'] ?></td>
                    <td><?= $value['seller_id'] ?></td>
                    <td><?= $value['buyer_id'] ?></td>
                    <td><?= $value['comodity'] ?></td>
                    <td><?= $value['request_total'] ?></td>
                    <td><?= $value['available_quantity_comoditas'] ?></td>
                    <td><?= $value['status'] ?></td>
                    <td><?= $value['application_date'] ?></td>
                </tr>
							<?php } ?>
            </tbody>
          </table>
        </div>
			</div>
		</div>
	</div>
	<div class="col-xl-8 col-lg-7">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">REPORT REVENUE OF LOAN </h6>
				<div class="dropdown no-arrow">
					<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
						aria-labelledby="dropdownMenuLink">
						<div class="dropdown-header">Dropdown Header:</div>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>

			<!-- Card Body -->
			<div class="card-body">
				<div class="chart-area">
					<canvas id="myBarChart3"></canvas>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-8 col-lg-7">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Data Of Bank Account <?php echo date('Y') ?></h6>
				<div class="dropdown no-arrow">
					<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
						aria-labelledby="dropdownMenuLink">
						<div class="dropdown-header">Dropdown Header:</div>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered datatable" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>No. Rek</th>
                                <th>Nama</th>
								<th>Jenis</th>
                                <th>Saldo</th>
								<th>Profit</th>
								<th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php $i = 1; foreach($schema_rekening as $value) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['id_pembuatan'] ?></td>
                                <td><?= $value['no_rek'] ?></td>
                                <td><?= $value['nama_nasabah'] ?></td>
                                <td><?= $value['jenis_rek'] ?></td>
                                <td><?= $value['saldo'] ?></td>
                                <td><?= $value['profit'] ?></td>
                                <td><?= $value['tgl_pembukaan_rek'] ?></td>
                            </tr>
							<?php } ?>
                        </tbody>
                    </table>
                </div>
			</div>
		</div>
	</div>
  <div class="col-xl-8 col-lg-7">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Data Of Loan <?php echo date('Y') ?></h6>
				<div class="dropdown no-arrow">
					<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
						aria-labelledby="dropdownMenuLink">
						<div class="dropdown-header">Dropdown Header:</div>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered datatable" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id Pinjam</th>
                                <th>No Rek</th>
                                <th>Nama Nasabah</th>
                                <th>Produk Pinjam</th>
								<th>Saldo Pinjam</th>
                                <th>Lama Pinjam</th>
								<th>Metoda Pinjam</th>
								<th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php $i = 1; foreach($schema_pinjam as $value) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['id_pinjam'] ?></td>
                                <td><?= $value['no_rek'] ?></td>
                                <td><?= $value['nama_nasabah'] ?></td>
                                <td><?= $value['produk_pinjam'] ?></td>
                                <td><?= $value['saldo_pinjam'] ?></td>
                                <td><?= $value['lama_pinjam'] ?></td>
                                <td><?= $value['tgl_pinjam'] ?></td>
                            </tr>
							<?php } ?>
                        </tbody>
                    </table>
                </div>
			</div>
		</div>
	</div>
	
  <div class="col-xl-8 col-lg-7">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Data Of Incoming Comodity <?php echo date('Y') ?></h6>
				<div class="dropdown no-arrow">
					<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
						aria-labelledby="dropdownMenuLink">
						<div class="dropdown-header">Dropdown Header:</div>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered datatable" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Created_at</th>
                                <th>Komoditas</th>
                                <th>Jumlah_pengajuan</th>
                                <th>Unit</th>
                                <th>Target_Pasar</th>
                                <th>Nama_Pengaju</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php $i = 1; foreach($schema_komodity as $value) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['created_at'] ?></td>
                                <td><?= $value['komoditas'] ?></td>
                                <td><?= $value['jumlah_pengajuan'] ?></td>
                                <td><?= $value['unit'] ?></td>
                                <td><?= $value['target_pasar'] ?></td>
                                <td><?= $value['nama_pengaju'] ?></td>
                            </tr>
							<?php } ?>
                        </tbody>
                    </table>
                </div>
			</div>
		</div>
	</div>
  <div class="col-xl-8 col-lg-7">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Data Of Transaction <?php echo date('Y') ?></h6>
				<div class="dropdown no-arrow">
					<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
						aria-labelledby="dropdownMenuLink">
						<div class="dropdown-header">Dropdown Header:</div>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered datatable" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id Transaksi</th>
                                <th>Nama Komodity</th>
                                <th>Metode Bayar</th>
                                <th>Total Pengajuan</th>
								<th>total_bayar</th>
                                <th>Saldo</th>
								<th>Profit</th>
								<th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php $i = 1; foreach($schema_transaksi as $value) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['id_transaksi'] ?></td>
                                <td><?= $value['nama_komodity'] ?></td>
                                <td><?= $value['metode_bayar'] ?></td>
                                <td><?= $value['total_pengajuan'] ?></td>
                                <td><?= $value['total_bayar'] ?></td>
                                <td><?= $value['profit'] ?></td>
                                <td><?= $value['tgl_transaksi'] ?></td>
                            </tr>
							<?php } ?>
                        </tbody>
                    </table>
                </div>
			</div>
		</div>
	</div>
<script>
window.setTimeout(
  () => {
    // Area Chart Example
var ctx = document.getElementById("chart1");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [<?= implode(", ", $monthlabel) ?>],
    datasets: [{
      label: "Total Pengajuan: ",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "#16676e",
      pointRadius: 3,
      pointBackgroundColor: "#16676e",
      pointBorderColor: "#16676e",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "#16676e",
      pointHoverBorderColor: "#16676e",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [<?= implode(", ", $graph_komodity) ?>],
    },
    {
      label: "Transaksi: ",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "#d88f1a",
      pointRadius: 3,
      pointBackgroundColor: "#d88f1a",
      pointBorderColor: "#d88f1a",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "#d88f1a",
      pointHoverBorderColor: "#d88f1a",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [<?= implode(", ", $graph_komodity2) ?>],
    },
    
    ],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
        yAxes: [{
            ticks: {
                display: true,
                min: 0,
            }
        }],
    },    
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#1e3d36",
      titleMarginBottom: 10,
      titleFontColor: '#181711',
      titleFontSize: 14,
      borderColor: '#1e3d36',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ' ' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});
// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [<?= implode(", ", $monthlabel) ?>],
    datasets: [{
      label: "Expected Profit",
      lineTension: 0.3,
      backgroundColor: "#16676e",
      borderColor: "#16676e",
      pointRadius: 3,
      pointBackgroundColor: "#16676e",
      pointBorderColor: "#16676e",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "#16676e",
      pointHoverBorderColor: "#16676e",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      hoverBackgroundColor: "#16676e",
      data: [<?= implode(", ", $graph_transaction) ?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
        yAxes: [{
            ticks: {
                display: true,
                min: 0,
            }
        }],
    },    
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor:"#091613",
      titleMarginBottom: 10,
      titleFontColor: '#dd9c35',
      titleFontSize: 14,
      borderColor: '#0f4839',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ' ' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});

//Polar Chart Example
var ctx = document.getElementById("polararea");
var myPieChart = new Chart(ctx, {
  type: 'polarArea',
  data: {
    labels: [<?= implode(", ", $label_polar) ?>],
    datasets: [{
      data: [<?= implode(", ", $graph_polar) ?>],
      backgroundColor: [<?= implode(", ", $color_polar) ?>],
      hoverBackgroundColor: ['#16676e', '#d88f1a', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
// Bar Chart Example
var ctx = document.getElementById("myBarChart2");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [<?= implode(", ", $graph_dsit_jenisrek) ?>],
    datasets: [{
      label: "Expected Profit",
      lineTension: 0.3,
      backgroundColor: [<?= implode(", ", $color_jenisrek) ?>],
      // borderColor: "#16676e",
      pointRadius: 3,
      // pointBackgroundColor: "rgba(78, 115, 223, 1)",
      // pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      // pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      // pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      // hoverBackgroundColor: "#2e59d9",
      data: [<?= implode(", ", $graph_rekening) ?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
        yAxes: [{
            ticks: {
                display: true,
                min: 0,
            }
        }],
    },    
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#16676e",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#16676e',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ' ' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});

// Bar Chart Example
var ctx = document.getElementById("myBarChart3");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [<?= implode(", ", $monthlabel) ?>],
    datasets: [{
      label: "Expected Profit: ",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "#d88f1a",
      pointRadius: 3,
      pointBackgroundColor: "#d88f1a",
      pointBorderColor: "#d88f1a",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "#d88f1a",
      pointHoverBorderColor: "#d88f1a",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      hoverBackgroundColor: "#d88f1a",
      data: [<?= implode(", ", $graph_pinjam) ?>],
    },{
      label: "Transaksi: ",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "#16676e",
      pointRadius: 3,
      pointBackgroundColor: "#16676e",
      pointBorderColor: "#16676e",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "#16676e",
      pointHoverBorderColor: "#16676e",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      hoverBackgroundColor: "#16676e",
      data: [<?= implode(", ", $graph_pinjam2) ?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
        yAxes: [{
            ticks: {
                display: true,
                min: 0,
            }
        }],
    },    
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ' ' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});
  }, 1000
);

</script>