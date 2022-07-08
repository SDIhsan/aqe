<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>App Qurban - <?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.css"/>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

<!-- End of Topbar -->
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
                                        <?php $st = $di['penimbangan_total'] / 3; 
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
<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                        <div class="col-auto mt-4 mb-2">
                            <a href="<?= site_url('auth'); ?>" class="btn btn-sm btn-primary btn-icon-split">
                                <!-- <span class="icon"> -->
                                    <i class="fa fa-fw fa-solid fa-lg fa-arrow-right-to-bracket"></i>
                                    
                                <!-- </span> -->
                                <span class="text">
                                    Login
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Page level plugins -->
    <script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        // dataTables
        $(document).ready(function() {

            var dashtable = $('#dashboardTable').DataTable( {
                responsive: true,
                searhing: false,
                paging: false,
                info: false,
                bFilter: false,
                bInfo: false
            });

            new $.fn.dataTable.FixedHeader( dashtable );
        });

        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        function number_format(number, decimals, dec_point, thousands_sep) {
        // *     example: number_format(1234.56, 2, ',', ' ');
        // *     return: '1 234,56'
        number = (number + '').replace(',', '').replace(' ', '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
            };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
        }

        // Pie Chart Example
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Sepertiga", "Duapertiga", "MinusTigaSetengah"],
            datasets: [{
            data: [
                <?= number_format((float)$daging / 3, 2, '.', ''); ?>,
                <?= number_format((float)$daging * 2 / 3, 2, '.', ''); ?>,
                <?= number_format((float)3.5 * $kelompok, 2, '.', ''); ?>
            ],
            backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
            hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
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

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#myTable').DataTable( {
                responsive: true
            } );
        
            new $.fn.dataTable.FixedHeader( table );
        });
    </script>
</body>

</html>

