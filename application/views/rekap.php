<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4 mt-3">
                        <div class="card-body justify-content-center text-center">
                            <h2 class=" bold">Rekapitulasi Qurban</h2>
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-center">
                                        <tr>
                                            <th rowspan="2">Timbangan Ke</th>
                                            <th colspan="<?= $jumlah_kelompok; ?>">Kelompok / Pribadi</th>
                                        </tr>
                                        <tr>
                                            <?php
                                            if ($qurban) :
                                                foreach ($qurban as $q):
                                                    echo '<th>';
                                                    if ($q['qurban_status'] == 'Kelompok') {
                                                        echo 'K';
                                                    } else {
                                                        echo 'P';
                                                    }
                                                    echo '-' . $q['qurban_nomor'] . '</th>';
                                                endforeach;
                                            endif;
                                            ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        // createTable(,$jumlah_kelompok); 
                                        
                                        // function CreateTable($row,$column) 
                                        // { 
                                            // echo '<table border="1" cellpadding="5" cellspacing="0">'; 
                                            // max penimbangan ke
                                            
                                        // } 
                                        ?>
                                        <?php
                                        $no = 1;
                                        foreach ($rekda1 as $r) :
                                            foreach ($idq as $i) :
                                                if ($r['penimbangan_qurban'] == $i['qurban_id']) {
                                                    // echo $r['penimbangan_qurban'] . '-';
                                                    echo $r['penimbangan_jumlah'];
                                                } else {
                                                    // echo '-';
                                                }
                                            endforeach;
                                        endforeach;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-center">
                                        <tr>
                                            <th rowspan="2">Timbangan Ke</th>
                                            <th colspan="<?= $jumlah_kelompok; ?>">Kelompok / Pribadi</th>
                                        </tr>
                                        <tr>
                                            <?php
                                            if ($qurban) :
                                                foreach ($qurban as $q):
                                                    echo '<th>';
                                                    if ($q['qurban_status'] == 'Kelompok') {
                                                        echo 'K';
                                                    } else {
                                                        echo 'P';
                                                    }
                                                    echo '-' . $q['qurban_nomor'] . '</th>';
                                                endforeach;
                                            endif;
                                            ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($rekda1) { echo 'ok'; }
                                        if ($rekda2) { echo 'ok'; }
                                        $no = 1;
                                        
                                        if ($idq) :
                                            
                                            for ($no = 1; $no <= $max; $no++) {
                                                if (${'rekda' . $no}) :
                                                    // echo json_encode(${'rekda' . $no});
                                                    echo '<br>';
                                                    echo json_encode(${'cr' . $no});
                                                    echo ${'cr' . $no};
                                                    echo json_encode(${'rekdas' . $no});
                                                    echo '<br>';
                                                    echo json_encode($idq);
                                                    echo json_encode($jumlah_kelompok);
                                                    echo $jumlah_kelompok;
                                                    echo '<br>';
                                                    echo $idmax;
                                                    echo '<br>';
                                                    $r = json_encode(${'rekdas' . $no}[0]->penimbangan_qurban, JSON_NUMERIC_CHECK);
                                                    echo $r;
                                                    echo '<br>';
                                                    echo json_encode($idq[2]['qurban_id'], JSON_NUMERIC_CHECK);
                                                    echo json_encode($idq[1], JSON_NUMERIC_CHECK);
                                                    // $rkd = json_decode(${'rekda' . $no}['penimbangan_qurban']);
                                                    // echo $rkd;
                                                    echo '<tr>';
                                                    echo '<td width=1><b>' . $no . '</b></td>';
                                                    // for ($x = 0; $x < ${'cr' . $no}; $x++) {
                                                    //     if (${'rekdas' . $no}[$x]) {
                                                    //         for ($y = 0; $y < $jumlah_kelompok; $y++) {
                                                    //             if (json_encode(${'rekdas' . $no}[$x], JSON_NUMERIC_CHECK) === json_encode($idq[$y]['qurban_id'], JSON_NUMERIC_CHECK)) {
                                                    //                     // if (!empty(${'rekdas' . $no}[$y])){
                                                    //                     echo '<td>';
                                                    //                     echo json_encode(${'rekdas' . $no}[$x]->penimbangan_jumlah, JSON_NUMERIC_CHECK);
                                                    //                     echo '</td>';
                                                    //                 // }
                                                    //             } else {
                                                    //                 // echo '<td>' . $x . '</td>';
                                                    //                 echo '<td>-</td>';
                                                    //             }
                                                    //         }
                                                    //     }
                                                    // }
                                                    
                                                    for ($x = 0; $x < ${'cr'. $no}; $x++) {

                                                        // sus
                                                        if (!empty(${'rekdas' . $no}[$x])) :
                                                            $array = ${'rekdas' . $no}[$x];
                                                            // echo $array;
                                                            
                                                            // if (isset($array->penimbangan_qurban)){
                                                                
                                                                for ($y = 0; $y < $jumlah_kelompok; $y++) {
                                                                    print_r(array_search($array->penimbangan_qurban, $idq[$y]['qurban_id']));
                                                                    // if ($array->penimbangan_qurban !== $idq[$y]['qurban_id']) {
                                                                    //     echo '<td></td>';
                                                                    // }

                                                                    // if (array_search($array->penimbangan_qurban === $idq[$y]['qurban_id']) {
                                                                    // if (json_encode(${'rekdas' . $no}[$x]->penimbangan_qurban, JSON_NUMERIC_CHECK) == json_encode($idq[$x]['qurban_id'], JSON_NUMERIC_CHECK)) {
                                                                        // echo json_encode(${'rekdas' . $no}[$x]->penimbangan_qurban, JSON_NUMERIC_CHECK);
                                                                        // echo '<td>' . $x . '</td>';
                                                                        // echo '<td>';
                                                                        // echo json_encode(${'rekdas' . $no}[$x]->penimbangan_jumlah, JSON_NUMERIC_CHECK);
                                                                        // echo '</td>';
                                                                        // echo '<td>' . json_encode(${'rekdas' . $no}[$x]->penimbangan_jumlah, JSON_NUMERIC_CHECK) . '</td>';
                                                                    // }
                                                                }
                                                            // };
                                                        else :
                                                            echo '<td></td>';
                                                        endif;
                                                    };
                                                    
                                                    echo '</tr>';
                                                else:
                                                    echo '<tr>';
                                                    echo '<td>-</td>';
                                                    echo '</tr>';
                                                endif;
                                            };
                                        endif;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Horizontal </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <!-- <thead class="text-center">
                                        <tr>
                                            <th rowspan="2">Timbangan Ke</th>
                                            <th colspan="<?= $jumlah_kelompok; ?>">Kelompok / Pribadi</th>
                                        </tr>
                                        <tr>
                                            <?php
                                            if ($qurban) :
                                                foreach ($qurban as $q):
                                                    echo '<th>';
                                                    if ($q['qurban_status'] == 'Kelompok') {
                                                        echo 'K';
                                                    } else {
                                                        echo 'P';
                                                    }
                                                    echo '-' . $q['qurban_nomor'] . '</th>';
                                                endforeach;
                                            endif;
                                            ?>
                                        </tr>
                                    </thead> -->
                                    <!-- <tbody> -->
                                        <?php
                                        $no = 1;
                                        // echo var_dump($idq);
                                        if ($idq) :
                                            // for ($no = 0; $no <= $idmax; $no++) {
                                                foreach ($idq as $i) :
                                                    echo '<tr>';
                                                    echo '<th scope="col" width=1><b>' . $i['qurban_id'] . '</b></th>';
                                                    if (${'pertimbangan' . $i['qurban_id']}) :
                                                        foreach (${'pertimbangan' . $i['qurban_id']} as $r) :
                                                            if ($r['penimbangan_qurban'] == $i['qurban_id'])
                                                            {
                                                                    echo '<td>' . $r['penimbangan_jumlah'] .'</td>';
                                                            } else {
                                                                echo '<td>-</td>';
                                                            };
                                                        endforeach;
                                                        // echo '</tr>';
                                                    else:
                                                        // echo '<tr>';
                                                        // echo '<td width=1><b>' . $i['qurban_id'] . '</b></td>';
                                                        echo '<td>-</td>';
                                                    endif;
                                                    echo '</tr>';
                                                // };
                                            endforeach;
                                        endif;
                                        ?>
                                    <!-- </tbody> -->
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <!-- <script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script> -->

</body>

</html>