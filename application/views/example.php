<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables Qurban</h1>
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                        <?php date_default_timezone_set("Asia/Jakarta"); ?>
                        Data Qurban 
                        <!-- <?= date('Y-m-d H:i:s P'); ?> -->
                    </h4>
                </div>
                <?php if (is_admin()) : ?>
                <div class="col-auto">
                    <a class="btn btn-sm btn-primary btn-icon-split"  data-toggle="modal" data-target="#exampleModalCenter">
                        <!-- <span class="icon"> -->
                            <i class="fa fa-fw fa-solid fa-lg fa-square-plus"></i>
                        <!-- </span> -->
                        <span class="text">
                            Add Kelompok
                        </span>
                    </a>
                </div>
                <?php endif; ?>
            </div>            
        </div>
        <?php if (is_admin()) : ?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Form Add Shohibul</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= site_url('qurban/add'); ?>" method="POST">
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Jenis</span>
                                </div>
                                <select name="status" id="status" class="custom-select">
                                    <option value="" selected>Pilih Kelompok / Pribadi ?</option>
                                    <option value="Kelompok">Kelompok</option>
                                    <option value="Pribadi">Pribadi</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Nama</span>
                                </div>
                                <input type="text" name="nama" class="form-control" placeholder="Nama" aria-label="Nama" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th class="text-center" scope="col">#</th>
                            <th class="text-center">Kelompok</th>
                            <th class="text-center">Shohibul</th>
                            <th class="text-center">Penyembelihan</th>
                            <th class="text-center">Pengeletan</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody id="dataQurban">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->