<link href="assets/css/bootstrap.css" rel="stylesheet" />

<link href="assets/css/font-awesome.css" rel="stylesheet" />

<link href="assets/css/style.css" rel="stylesheet" />

<div class="panel-body">
    <div class="col-md-2 col-sm-2"></div>
    <div class="col-md-8 col-sm-8">
        <div class="panel panel-primary" id="print">

            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Laporan</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <!--   <th>Detail</th> -->
                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 1; ?>
                            <?php foreach ($menu as $m) : ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $m['nama_pelapor']; ?></td>
                                    <td><?php echo $m['laporan']; ?></td>
                                    <td><?php echo $m['status']; ?></td>
                                    <td><?php echo $m['tanggal']; ?></td>
                                    <!--<td><a href="" class="btn btn-info">Detail</a></td>-->
                                </tr>

                                <?php $i++; ?>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>




            </div>

        </div>


    </div>
    <div class="col-md-2 col-sm-2"></div>

</div>



</div>
<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/bootstrap.js"></script>