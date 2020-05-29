<script type="text/javascript">
  function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
  }
</script>

<link href="<?php echo base_url('assets/user/'); ?>css/bootstrap.css" rel="stylesheet" />

<link href="<?php echo base_url('assets/user/'); ?>css/font-awesome.css" rel="stylesheet" />

<link href="<?php echo base_url('assets/user/'); ?>css/style.css" rel="stylesheet" />

<div class="panel-body">
  <div class="col-md-2 col-sm-2"></div>
  <div class="col-md-8 col-sm-8">
    <div class="panel panel-primary" id="print">

      <div class="panel-body">
        <!-- <center>  -->
        <img src="<?php echo base_url('assets/user/'); ?>img/pip.jpg" style="float:left;"> <!-- </center> -->
        <style type="text/css">
          img {
            width: 100px;
            height: 100px;
            margin-left: 10px;
            margin-right: -45px;
          }
        </style>

        <center>
          <h5><b>KEMENTERIAN PERHUBUNGAN<br>BADAN PENGEMBANGAN SUMBER DAYA MANUSIA PERHUBUNGAN<br>
              <font size="6">POLITEKNIK ILMU PELAYARAN SEMARANG</font>
            </b>

            <table align="center">
              <tr>
                <td width="150">
                  <span align="right">
                    <h6>JALAN SINGOSARI 2A<br>SEMARANG<br>KODE POS 50242</h6>
                </td></span>

                <td width="5">
                  <div class=pull-right style="width: 0px; height: 40px; border: 1px #000 solid;">
                </td>
      </div>
      <td width="150">
        <span align="right">
          <h6>TELP. (62) 024 - 8311527<br>(62) 024 - 8311528</td>
      </h6></span>

      <td width="5">
        <div class=pull-right style="width: 0px; height: 40px; border: 1px #000 solid;">
      </td>
    </div>
    <td width="5">
    <td width="225">
      <h6>Home Page :<font color="blue">www.pip-semarang.ac.id</font><br>E-mail : info@pip-semarang.ac.id<br> Fax : (62) 024 - 8311529
    </td>
    </h6>
    </tr>
    </table>
    <p><b>______________________________________________________________________________________________________________________________</b></p>
    <p style="text-align:center"><b>
        <font size="5"><ins>PERMOHONAN PERBAIKAN</ins></font>
      </b><br>
      <table align="center">
        <tr>
          <td height="30" colspan="2"></td>
        <tr>
          <td width="100">Kepada Yth</td>
          <td width="500"> : Kepala Unit IT</td>
        </tr>
        <tr>
          <td>Dari</td>
          <td style="text-transform: capitalize" width="500"> : <?php echo $data_print['nama']; ?></td>
        </tr>
        <tr>
          <td>Perihal</td>
          <td style="text-transform: capitalize" width="500"> : <?php echo $data_print['perihal']; ?></td>
        </tr>

        <!-- <tr>
                              <td height="50" colspan="2"></td> -->
      </table>
      <p>_________________________________________________________________________________________________________</p>
      <div style="text-align: left; margin-left:107px; text-transform:capitalize">
        <table>
          <tr>
            <td>1</td>
            <td s>. <?php echo $data_print['deskripsi_masalah']; ?></td>
          </tr>
        </table>
      </div>
    </p>
    <!-- <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><?php echo $nama ?> </label>
                                        </div>
                            </div>

                            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><?php echo $jenkel ?> </label>
                                        </div>
                            </div>
                            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Telepon</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><?php echo $nohp ?> </label>
                                        </div>
                            </div>
                            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat </label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><?php echo $alamat ?>   </label>
                                        </div>
                            </div>
                            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Instansi / Divisi </label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><?php echo $lurah_desa ?>  </label>
                                        </div>
                            </div>
                            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No Hp</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><?php echo $nohp ?> </label>
                                        </div>
                            </div> -->



    <!--  </p> -->
    <!-- <p>_____________________________________________________________________________________________________________</p> -->
    <!-- <b><h2>Peristiwa Yang Dilaporkan</h2></b> -->

    <!-- <p>_____________________________________________________________________________________________________________</p> -->

    <!-- <p> -->
    <!-- <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Isi Pengaduan</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><?php echo $isi_laporan ?> </label>
                                        </div>
                            </div> 
                            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Pengaduan</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><?php echo $tgl_kejadian ?> </label>
                                        </div>
                            </div>  -->


    <br><br>


    <p align="Right"> <?php echo tgl_indonesia($data_print['tanggal']) ?></p><br><br><br><br>
    <!-- <p align="Right">_______________________________</p> -->
  </div>

</div>
<div class="panel-footer">
  <button type="button" onclick="printDiv('print')" class="btn btn-success pull-right"><i class="fa fa-print"></i> Print
  </button>
</div>


</div>
<div class="col-md-2 col-sm-2"></div>

</div>



</div>
<script src="<?php echo base_url('assets/user/'); ?>js/jquery-1.11.1.js"></script>

<script src="<?php echo base_url('assets/user/'); ?>js/bootstrap.js"></script>