<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Web Pengaduan Layanan Online</title>

    <link href="<?php echo base_url('assets/user/') ?>css/bootstrap.css" rel="stylesheet" />

    <link href="<?php echo base_url('assets/user/') ?>css/font-awesome.css" rel="stylesheet" />

    <link href="<?php echo base_url('assets/user/') ?>css/style.css" rel="stylesheet" />

</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>jheprogrammer@gmail.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+6281364456585
                </div>

            </div>
        </div>
    </header>

    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">



                <img style="padding-bottom: 5%" src="<?php echo base_url('assets/user/') ?>img/pipsmg.png" />


            </div>
            <div class="navbar-header">



                <CENTER>
                    <h1>WEB PENGADUAN LAYANAN<br>SAMPAIKAN LAPORAN ANDA LANGSUNG</h1><br>
                    <h2>Jl. Singosari Raya No.2A - Jawa Tengah 50242</h2>
                </CENTER>
            </div>
        </div>
    </div>

    <section class="menu-section navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="<?php if ($this->uri->segment(2) == "") {
                                                echo "menu-top-active";
                                            } ?>" href="<?php echo base_url('user'); ?>">Home</a></li>
                            <li><a class="<?php if ($this->uri->segment(2) == "lapor") {
                                                echo "menu-top-active";
                                            } ?>" href="<?php echo base_url('user/lapor'); ?>">Lapor Online</a></li>
                            <li><a class="<?php if ($this->uri->segment(2) == "informasi") {
                                                echo "menu-top-active";
                                            } ?>" href="<?php echo base_url('user/informasi'); ?>">Informasi</a></li>

                            <li><a href="<?php echo base_url('admin'); ?>">ADMIN</a></li>


                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="content-wrapper">
        <div class="container">




            <div class="row">
                <div class="col-md-12">
                    <div class="notice-board">
                        <div class="panel panel-default">