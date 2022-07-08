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
        <div class="col-xl-8 col-lg-4">
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
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
                                            <div class="progress mr-2" id="tersembelih">
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
                                    <i class="fas fa-solid fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
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
                                    <i class="fas fa-solid fa-clipboard-check fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
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
                                    <i class="fas fa-solid fa-weight fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total 1/3 Daging</div>
                                    <div class="h3 mb-0 font-weight-bold text-gray-800"><?= number_format((float)$daging / 3, 2, '.',''); ?> Kg</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-solid fa-cubes fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Total 2/3 Daging Setelah Dikurangi 3.5Kg
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h3 mb-0 mr-3 font-weight-bold text-gray-800"><?= number_format((float)($daging * 2 / 3) - (3.5 * $kelompok), 2, '.', ''); ?> Kg</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-solid fa-weight fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Daging Dikurangi 3.5kg</div>
                                    <div class="h3 mb-0 font-weight-bold text-gray-800"><?= number_format((float)3.5 * $kelompok, 2, '.',''); ?> Kg</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-solid fa-cubes fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
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
                            <i class="fas fa-circle text-info"></i> Minus 3.5
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dashboardTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class=" align-middle text-center" width="5%" rowspan="2">#</th>
                                    <th class=" align-middle text-center" width="30%" rowspan="2">Kelompok / Pribadi</th>
                                    <th class=" align-middle text-center"  width="20%" colspan="2">Waktu Selesai</th>
                                    <th class=" align-middle text-center" width="15%" rowspan="2">Total Daging</th>
                                    <th class=" align-middle text-center" width="15%" rowspan="2">Sepertiga Bagian</th>
                                    <th class=" align-middle text-center" width="15%" rowspan="2">Daging @Shohibul</th>
                                </tr>
                                <tr>
                                    <th class=" align-middle text-center">Penyembelihan</th>
                                    <th class=" align-middle text-center">Pengulitan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                if ($dagingid) :
                                    foreach ($dagingid as $di) :
                                ?>
                                <tr>
                                    <td class="font-weight-bold text-center"><?= $no++; ?></td>
                                    <td><?= $di['qurban_status'] . ' ' . $di['qurban_nomor'] . ' (' . $di['qurban_shohibul'] .')'; ?></td>
                                    <td><?= date_format(new DateTime($di['qurban_sembelih']), 'H:i:s'); ?></td>
                                    <td><?= date_format(new DateTime($di['qurban_pengeletan']), 'H:i:s'); ?></td>
                                    <td><?= number_format((float)$di['penimbangan_total'], 2, '.', ''); ?></td>
                                    <td>
                                        <?php $st = $di['penimbangan_total']/3; 
                                        echo number_format((float)$st, 2, '.', ''); 
                                        ?>
                                    </td>
                                    <td>
                                    <?php 
                                        if (strstr($di['qurban_status'],"Kelompok") != false) {
                                            echo number_format(((float)$st - 3.5) / 7, 2, '.', '');
                                        } else if (strstr($di['qurban_status'], "Pribadi") != false) {
                                            echo number_format((float)$di['penimbangan_total'] / 3, 2, '.', ''); 
                                        }
                                        ?>
                                    </td>
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
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
