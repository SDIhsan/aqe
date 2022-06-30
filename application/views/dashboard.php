<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div> -->

    <!-- Content Row -->
    <div class="row pt-4">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Qurban Tersembelih
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h2 mb-0 mr-2 ml-1 font-weight-bold text-gray-800"><?= $tersembelih; ?></div>
                                </div>
                                <div class="col">
                                    <div class="progress mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: <?= $tersembelih / $shohibul * 100; ?>%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"><?= $tersembelih; ?>/<?= $shohibul; ?></div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $shohibul; ?></div>
                                </div>
                            </div>
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
                                Qurban Pengeletan
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h2 mb-0 mr-2 ml-1 font-weight-bold text-gray-800"><?= $pengeletan; ?></div>
                                </div>
                                <div class="col">
                                    <div class="progress mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: <?= $pengeletan / $shohibul * 100; ?>%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"><?= $pengeletan; ?>/<?= $shohibul; ?></div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $shohibul; ?></div>
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
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Daging
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h3 mb-0 mr-3 font-weight-bold text-gray-800"><?= number_format((float)$daging, 2, '.', ''); ?> Kg</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total 1/3 Daging</div>
                            <div class="h3 mb-0 font-weight-bold text-gray-800"><?= number_format((float)$daging / 3, 2, '.',''); ?> Kg</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8 col-lg-6">
            <div class="card mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <h6 class="m-0 font-weight-bold text-primary">Status Qurban</h6>
                    <hr>
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-3">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <h6 class="m-0 font-weight-bold text-primary">Perbandingan Alokasi Daging (Total)</h6>
                    <hr>
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> 1/3 Bagian
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> 2/3 Bagian
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Minus Dua
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kelompok / Pribadi</th>
                                    <th>Total Daging</th>
                                    <th>Sepertiga Bagian</th>
                                    <th>Daging @Shohibul</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                if ($dagingid) :
                                    foreach ($dagingid as $di) :
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $di['qurban_status'] . ' ' . $di['qurban_nomor'] . ' (' . $di['qurban_shohibul'] .')'; ?></td>
                                    <td><?= number_format((float)$di['total'], 2, '.', ''); ?></td>
                                    <th>
                                        <?php $st = $di['total']/3; 
                                        echo number_format((float)$st, 2, '.', ''); 
                                        ?>
                                    </th>
                                    <th>
                                        <?= number_format(((float)$st-2)/7, 2, '.', ''); ?>
                                    </th>
                                </tr>
                                <?php
                                    endforeach;
                                endif;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-3">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Distribusi</th>
                                    <th>Massa (KG)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                $t = 0;
                                if ($distribusi) :
                                    foreach ($distribusi as $dt) :
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $dt['distribusi_ket']; ?></td>
                                    <td><?= number_format((float)$dt['distribusi_jumlah'], 2, '.', ''); ?></td>
                                </tr>
                                <?php
                                    $t = $t + $dt['distribusi_jumlah'];
                                    endforeach;
                                endif;
                                ?>
                            </tbody>
                        </table>
                        <hr>
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Total</th>
                                    <th><?= $t; ?></th>
                                </tr>
                                <tr>
                                    <th>2/3 Daging</th>
                                    <th>
                                        <?php 
                                        $dpt = number_format((float)$daging * 2 / 3, 2, '.', '');
                                        echo $dpt;
                                        ?>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Selisih</th>
                                    <th>
                                        <?php 
                                        $slh = $dpt - $t; 
                                        echo $slh;
                                        ?>
                                    </th>
                                </tr>
                                <tr>
                                    <th>TK Kesalahan</th>
                                    <th><?= number_format((float)$slh / $t * 100, 2, '.', ''); ?>%</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
