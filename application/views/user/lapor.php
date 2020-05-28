<!--<div class="panel-heading">
    <center> Lapor Online</center>

</div>-->
<div class="panel-body">

    <div class="col-md-8 col-sm-8">
        <?php echo $this->session->flashdata('message') ?>
        <form method="post" action="<?php echo base_url('user/lapor'); ?>" enctype="multipart/form-data">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Lapor Online
                </div>
                <div class="panel-body">
                    <!-- <ul class="nav nav-pills">
                        <li class=""><a href="#pelapor" data-toggle="tab">Pelapor</a>
                        </li>
                        <li class=""><a href="#peristiwa" data-toggle="tab">peristiwa yang dilaporkan</a>
                        </li>
                    </ul>-->
                    <div class="tab-content">
                        <div class="tab-pane fade active in">
                            <h4>Data Diri Pelapor</h4>

                            <div class="space-4"></div>
                            <div class="form-group">
                                <label for="form-field-select-3">Nama Lengkap</label>

                                <div>
                                    <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control" />
                                    <?php echo form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-field-select-3">Bagian / Unit</label>
                                <div>
                                    <input type="text" class="form-control" id="bagian" name="bagian" placeholder="Bagian / Unit"></input>
                                    <?php echo form_error('bagian', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-field-select-3">perihal</label>
                                <div>
                                    <input type="text" id="perihal" name="perihal" placeholder="perihal laporan" class="form-control" />
                                    <?php echo form_error('perihal', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-field-select-3">Keterangan Masalah</label>
                                <div>
                                    <input type="text" id="masalah" name="masalah" placeholder="Keterangan Masalah" class="form-control" />
                                    <?php echo form_error('masalah', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <!--<div class="tab-pane fade" id="peristiwa">
                                <h4>Keluhan Yang Dilaporkan</h4>

                                <div class="space-4"></div>
                                <div class="form-group">
                                    <label for="form-field-select-3">Isi Pengaduan</label>

                                    <div>
                                        <input type="text" id="isi_laporan" name="isi_laporan" placeholder="Isi " class="form-control" />
                                    </div>
                                </div>


                                <div class="space-4"></div>
                                <div class="form-group">
                                    <label for="form-field-select-3">Tanggal Pengaduan</label>

                                    <div>
                                        <input type="text" id="tgl_kejadian" name="tgl_kejadian" placeholder="Tanggal Pengaduan" class="form-control" />
                                    </div>
                                </div>


                                <div class="space-4"></div>
                            </div>-->
                    </div>
                </div>
            </div>

            <div class="panel-footer">
                <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-user">Laporkan</button>
            </div>
        </form>

    </div>


    <div class="col-md-4 col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Petunjuk
            </div>
            <div class="panel-body">
                <div class="alert alert-danger">
                    <p>semua data yang ada di <b>Pelapor, Peristiwa Yang Dilaporkan</b> Harus disi !</p>


                </div>
            </div>

        </div>
    </div>
</div>