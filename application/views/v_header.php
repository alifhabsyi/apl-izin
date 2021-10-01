<?php 
    if($this->session->userdata("NAMA"=="")){
        redirect( base_url('login'));
    }
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jul 2021 08:52:51 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() . '/maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' ?>" />
    <!-- CSS Files -->
    
    <link href="<?php echo base_url() . '/assets/css/bootstrap.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url() . '/assets/css/light-bootstrap-dashboard790f.css?v=2.0.1' ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url() . '/assets/css/demo.css' ?>" rel="stylesheet" />


</head>
<style>
    .modal-backdrop {
        /* bug fix - no overlay */
        z-index: -1;
    }
    

</style>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="https://www.creative-tim.com/" class="simple-text logo-mini">
                        AP
                    </a>
                    <a href="https://www.creative-tim.com/" class="simple-text logo-normal">
                        Perizinan
                    </a>
                </div>
                <div class="user">

                    <div class="info ">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span><?php $nama1 = $this->session->userdata("NAMA");
                                    echo $nama1;
                                    ?>
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a class="profile-dropdown" href="<?php echo base_url()?>login/logout">
                                        <span class="sidebar-mini">LO</span>
                                        <span class="sidebar-normal">LOG OUT</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url().'/admin/app1';?>">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                            <i class="nc-icon nc-app"></i>
                            <p>
                                Perizinan
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="componentsExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url().'dashboard';?>">
                                        <span class="sidebar-mini">IZ</span>
                                        <span class="sidebar-normal">Pengajuan Perizinan</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url().'admin/app1';?>">
                                        <span class="sidebar-mini">TZ</span>
                                        <span class="sidebar-normal">Penerimaan Perizinan</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url().'admin/rjc';?>">
                                        <span class="sidebar-mini">TZ</span>
                                        <span class="sidebar-normal">Reject Perizinan</span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                            <i class="nc-icon nc-notes"></i>
                            <p>
                                Verifikasi Lokasi
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="formsExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url().'admin/stbap';?>">
                                        <span class="sidebar-mini">SB</span>
                                        <span class="sidebar-normal">Surat Tugas</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url().'admin/survei';?>">
                                        <span class="sidebar-mini">SV</span>
                                        <span class="sidebar-normal">Hasil Survei</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>
                                SK Perizinan
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="mapsExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url().'admin/sk';?>">
                                        <span class="sidebar-mini">SK</span>
                                        <span class="sidebar-normal">SK Terbit</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url().'admin/bsl';?>">
                                        <span class="sidebar-mini">BSL</span>
                                        <span class="sidebar-normal">SK Tolak</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#laporan">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>
                                Laporan
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="laporan">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url().'admin/lterima';?>">
                                        <span class="sidebar-mini">LB</span>
                                        <span class="sidebar-normal">Lap. Berkas Diterima</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url().'admin/lskterbit';?>">
                                        <span class="sidebar-mini">LS</span>
                                        <span class="sidebar-normal">Lap. SK Terbit</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url().'admin/lsktolak';?>">
                                        <span class="sidebar-mini">LS</span>
                                        <span class="sidebar-normal">Lap. SK Tolak</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url().'admin/lstbap';?>">
                                        <span class="sidebar-mini">LB</span>
                                        <span class="sidebar-normal">Lap. BAP </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url().'admin/lst';?>">
                                        <span class="sidebar-mini">LS</span>
                                        <span class="sidebar-normal">Lap. ST</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url().'register/saran';?>">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Kritik dan Saran</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon d-none d-lg-block">
                                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo"> Dashboard Perizinan </a>
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                 
                </div>
            </nav>
            <!-- End Navbar -->