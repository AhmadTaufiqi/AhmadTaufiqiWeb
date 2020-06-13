<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>
                <li class="active">halaman pengolahan data pelapor</li>
            </ul>

        </div>

        <div class="page-content">



            <div class="row">
                <div class="col-xs-12">

                    <div class="alert alert-block alert-info">
                        <h3 class="header smaller lighter blue">Data Pelapor</h3>
                        <h4 class="pink">
                            <?php if (validation_errors()) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo validation_errors(); ?>
                                </div>
                            <?php endif ?>

                            <?php echo $this->session->flashdata('message'); ?>
                            <i class="ace-icon fa fa-hand-o-right green"></i>
                            <a href="#modal-form" role="button" class="btn btn-app btn-pink btn-sm" data-toggle="modal"> Tambah</a>

                        </h4>
                        <div class="clearfix">
                            <div class="pull-right tableTools-container"></div>
                        </div>
                        <div class="table-header">
                            Kumpulan Data pelapor
                        </div>

                        <div>
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>

                                    <tr>
                                        <th scope="row">No</th>
                                        <th scope="row">Nama lengkap</th>
                                        <th scope="row">Bagian/Unit</th>
                                        <th scope="row">Perihal</th>
                                        <th scope="row">Keterangan Masalah</th>
                                        <th scope="row">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($menu as $m) : ?>

                                        <tr>
                                            <th scope="row"><?php echo $i ?></th>
                                            <td><?php echo $m['nama'] ?></td>
                                            <td><?php echo $m['bagian'] ?></td>
                                            <td><?php echo $m['perihal'] ?></td>
                                            <td><?php echo $m['deskripsi_masalah'] ?></td>

                                            <td>

                                                <a href="<?php echo base_url() ?>Admin/delete/<?php echo $m['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>hapus</a>
                                                <a href="<?php echo base_url() ?>admin/print/<?php echo $m['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-print"></i>cetak</a>

                                            </td>
                                        </tr>

                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>


                    </div>


                    <div class="hr hr32 hr-dotted"></div>


                </div>
                <div id="modal-form" class="modal" tabindex="-1">
                    <form method="post" action="<?php echo base_url('admin/pelapor'); ?>" enctype="multipart/form-data">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="blue bigger">Form Untuk Menambah data pelapor</h4>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-7">
                                            <div class="form-group">
                                                <select class="form-control" name="nama_pelapor" id="nama_pelapor">
                                                    <option value=""> pilih nama pelapor</option>
                                                    <?php foreach ($menu as $n) : ?>
                                                        <option value="<?php echo $n['nama']; ?>"><?php echo $n['nama']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="form-field-select-3">Laporan</label>
                                                <div>
                                                    <input type="text" name="laporan" id="laporan" class="form-control" />
                                                </div>
                                            </div>

                                            <div class="space-4"></div>
                                            <div class="form-group">
                                                <label for="form-field-select-3">Status:</label>
                                                <div>
                                                    <select class="form-control" name="status" id="status">
                                                        <option value="">-pilih-</option>
                                                        <option value="sedang ditangani">sedang ditangani</option>
                                                        <option value="selesai">selesai </option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="space-4"></div>
                                            <div class="form-group">
                                                <label for="form-field-select-3">Tanggal</label>

                                                <div>
                                                    <input type="date" name="tanggal" id="tanggal" class="form-control" />
                                                </div>
                                            </div>


                                            <div class="space-4"></div>

                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-sm" data-dismiss="modal" type="submit">
                                            <i class="ace-icon fa fa-times"></i>
                                            Batal
                                        </button>

                                        <button class="btn btn-sm btn-primary">
                                            <i class="ace-icon fa fa-check"></i>
                                            Simpan
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>