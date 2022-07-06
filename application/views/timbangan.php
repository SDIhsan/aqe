<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables Timbangan</h1>
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                        Data Penimbangan
                    </h4>
                </div>
                <div class="col-auto">
                    <a class="btn btn-sm btn-primary btn-icon-split"  data-toggle="modal" data-target="#exampleModalCenter">
                        <!-- <span class="icon"> -->
                        <i class="fa fa-fw fa-solid fa-lg fa-square-plus"></i>
                        <!-- </span> -->
                        <span class="text">
                            Add Timbang
                        </span>
                    </a>
                </div>
            </div>            
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Form Add Timbangan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= site_url('penimbangan/add') ?>" method="POST">
                    <div class="modal-body">
                        <div class="row form-group">
                            <label class="col-md-4 text-md-right" for="shohibul">Shohibul</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <select name="shohibul" id="shohibul" class="custom-select">
                                        <option value="" selected>Pilih Kelompok / Pribadi</option>
                                        <?php foreach ($qurban as $q) : ?>
                                            <option value="<?= $q['qurban_id'] ?>"><?= $q['qurban_status'] . ' ' . $q['qurban_nomor'] . ' - ' . $q['qurban_shohibul'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!-- <?= form_error('barang_id', '<small class="text-danger">', '</small>'); ?> -->
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-4 text-md-right" for="jumlah">Jumlah</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input name="jumlah" id="jumlah" type="text" class="form-control" placeholder="Jumlah Penimbangan...">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="satuan">Ons</span>
                                    </div>
                                </div>
                                <!-- <?= form_error('volume', '<small class="text-danger">', '</small>'); ?> -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th class="text-center">#</th>
                            <th class="text-center">Status (Kelompok / Pribadi) - Shohibul</th>
                            <th class="text-center">Ke</th>
                            <th class="text-center">Massa (Kg)</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        if ($penimbangan) :
                            foreach ($penimbangan as $p) :
                        ?>
                        <tr>
                            <td class=" align-middle font-weight-bold text-center" width="5%"><?= $no++; ?></td>
                            <td class=" align-middle" width="53%"><?= $p['qurban_status'] . ' ' . $p['qurban_nomor'] . ' - ' . $p['qurban_shohibul']; ?></td>
                            <td class=" align-middle text-center" width="10%"><?= $p['penimbangan_ke']; ?></td>
                            <td class=" align-middle text-center" width="20%"><?= $p['penimbangan_jumlah']; ?></td>
                            <td class=" align-middle text-center" width="12%">
                                <div class="form-button-action">
                                    <a data-toggle="modal" data-target="#Update<?= $p['penimbangan_id'] ?>" title="" class="btn btn-link btn-warning" data-original-title="Update <?= $p['qurban_status'] . ' ' . $p['qurban_nomor'] . ' - ' . $p['qurban_shohibul']; ?>">
                                        <i class="fa fa-fw text-success fa-edit"></i>
                                    </a>
                                    
                                    <a onclick="return confirm('Yakin ingin hapus?')"  href="<?= site_url('penimbangan/delete/') . $p['penimbangan_id'] ?>" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove <?= $p['qurban_status'] . ' ' . $p['qurban_nomor'] . ' - ' . $p['qurban_shohibul']; ?>">
                                        <i class="fa fa-fw text-warning fa-solid fa-trash"></i>
                                    </a>
                                </div>
                                
                            </td>
                            <div class="modal fade" id="Update<?= $p['penimbangan_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="row justify-content-center">
                                                <div class="col">
                                                    <div class="card shadow-sm border-bottom-primary">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Form Update Status Qurban</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= site_url('penimbangan/update/') . $p['penimbangan_id']; ?>" method="POST">
                                                                <h5 class="text-center"><b><?= $p['qurban_status'] . ' ' . $p['qurban_nomor'] . ' - ' . $p['qurban_shohibul']; ?></b></h5>
                                                                <hr>
                                                                <div class="row form-group">
                                                                    <label class="col-md-3 text-md-right" for="ke">Ke</label>
                                                                    <div class="col-md-9">
                                                                        <div class="input-group">
                                                                            <input type="text" name="ke" value="<?= $p['penimbangan_ke']; ?>" class="form-control" placeholder="Ke" aria-label="Ke" aria-describedby="basic-addon1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <label class="col-md-3 text-md-right" for="jumlah">Jumlah</label>
                                                                    <div class="col-md-9">
                                                                        <div class="input-group">
                                                                            <input type="number" name="jumlah" min=0 value="<?= $p['penimbangan_jumlah']; ?>" class="form-control" placeholder="Jumlah" aria-label="Jumlah" aria-describedby="basic-addon2">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row form-group">
                                                                    <div class="col-md-9 offset-md-3">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->