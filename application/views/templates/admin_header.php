<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Web Pengaduan Layanan Online</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="stylesheet" href="<?php echo base_url('assets/admin/'); ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/'); ?>font-awesome/4.2.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="<?php echo base_url('assets/admin/'); ?>fonts/fonts.googleapis.com.css" />

    <link rel="stylesheet" href="<?php echo base_url('assets/admin/'); ?>css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />


    <script src="<?php echo base_url('assets/admin/'); ?>js/ace-extra.min.js"></script>

</head>

<body class="no-skin">
    <div id="navbar" class="navbar navbar-default">
        <script type="text/javascript">
            try {
                ace.settings.check('navbar', 'fixed')
            } catch (e) {}
        </script>

        <div class="navbar-container" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

            <div class="navbar-header pull-left">
                <a href="?view=beranda" class="navbar-brand">
                    <small>
                        <i class="fa fa-leaf"></i>
                        Web Pengaduan Layanan
                    </small>
                </a>
            </div>

            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">



                    <li class="light-blue">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="<?php echo base_url('assets/admin/') ?>avatars/user.jpg" alt="Jason's Photo" />
                            <span class="user-info">
                                <small>Selamat Datang,</small>
                                <?php echo $user['name'] ?>
                            </span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">




                            <li class="divider"></li>

                            <li>
                                <a href="<?php echo base_url('auth/logout') ?>">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-container" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.check('main-container', 'fixed')
            } catch (e) {}
        </script>

        <div id="sidebar" class="sidebar responsive">
            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'fixed')
                } catch (e) {}
            </script>


            <ul class="nav nav-list">
                <li class="<?php if ($this->uri->segment(2) == "") {
                                echo "active";
                            } ?>">
                    <a href="<?php echo base_url('admin') ?>">
                        <i class="menu-icon fa fa-tachometer"></i>
                        <span class="menu-text"> Home </span>
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="<?php if ($this->uri->segment(2) == "pelapor") {
                                echo "active";
                            } ?>">
                    <a href="<?php echo base_url('admin/pelapor'); ?>">
                        <i class="menu-icon fa fa-list-alt"></i>
                        <span class="menu-text"> Data pelapor </span>
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="<?php if ($this->uri->segment(2) == "informasi") {
                                echo "active";
                            } ?>">
                    <a href="<?php echo base_url('admin/informasi') ?>">
                        <i class="menu-icon fa fa-list-alt"></i>
                        <span class="menu-text"> Data Informasi </span>
                    </a>
                    <b class="arrow"></b>
                </li>


            </ul>

            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>

            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'collapsed')
                } catch (e) {}
            </script>
        </div>