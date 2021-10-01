<head>
    <meta charset="utf-8" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() . '/maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' ?>" />
    <!-- CSS Files -->
    <link href="<?php echo base_url() . '/assets/css/bootstrap.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url() . '/assets/css/light-bootstrap-dashboard790f.css?v=2.0.1' ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url() . '/assets/css/demo.css' ?>" rel="stylesheet" />

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper wrapper-full-page">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
            <div class="container">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#pablo">APL PERIZINAN</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/apl-izin/dashboard" class="nav-link">
                                <i class="nc-icon nc-chart-pie-35"></i> Dashboard
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="/apl-izin/login" class="nav-link">
                                <i class="nc-icon nc-mobile"></i> Login
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="full-page register-page section-image" data-color="orange" data-image="../../assets/img/bg5.jpg">
            <div class="content">
                <div class="container">
                    <div class="card card-register card-plain text-center">
                        <div class="card-header ">
                            <div class="row  justify-content-center">
                                <div class="col-md-8">
                                    <div class="header-text">
                                        <h2 style="color:seashell">ID REGISTRASI PERMOHONAN IZIN ANDA ADALAH</h2>
                                        <br><br>
                                        <hr />
                                        <h1 style="color:springgreen">
                                            <?php
                                                 if ($this->input->get('n')) {
                                                    echo $this->input->get('n');
                                                    foreach ($regis as $a):
                                                        $status=$a->STATUS;
                                                        $jenis=$a->JENIS;
                                                        $id_reg=$a->ID_REG;
                                                    endforeach;
                                                    if ($status=="REG"){
                                                        ECHO "<br>MENUNGGU UPLOAD";
                                                        if ($jenis=="lab"){
                                                        echo "<br> <a href='".base_url()."register/upl1?n=".$id_reg."'>Klik Disini Untuk Melengkapi</a>"; 
                                                        }else if ($jenis=="pend"){
                                                            echo "<br> <a href='".base_url()."register/upl2?n=".$id_reg."'>Klik Disini Untuk Melengkapi</a>"; 
                                                        }else if ($jenis=="kons"){
                                                            echo "<br> <a href='".base_url()."register/upl3?n=".$id_reg."'>Klik Disini Untuk Melengkapi</a>"; 
                                                        }else {
                                                            echo "Jenis Izin Tidak Tersedia";
                                                        }
                                                        
                                                        
                                                    }
                                                }
                                                
                                            ?>
                                        </h1>
                                        <hr />
                                        <br>
                                        <a href="<?php echo base_url()?>register/print_register?n=<?php echo $id_reg ?>" target="_blank" class="btn btn-info">Cetak</i class="fa fa-print"></i></a>
                                        
                                        <h4 style="color:seashell" >HARAP DISIMPAN NOMOR REGISTRASI TERSEBUT</h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            
                           









                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!--







 -->
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url() . '/assets/js/core/jquery.3.2.1.min.js' ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . '/assets/js/core/popper.min.js' ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . '/assets/js/core/bootstrap.min.js' ?>" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url() . '/assets/js/plugins/bootstrap-switch.js' ?>"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Chartist Plugin  -->
<script src="<?php echo base_url() . '/assets/js/plugins/chartist.min.js' ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url() . '/assets/js/plugins/bootstrap-notify.js' ?>"></script>
<!--  Share Plugin -->
<script src="<?php echo base_url() . '/assets/js/plugins/jquery.sharrre.js' ?>"></script>
<!--  jVector Map  -->
<script src="<?php echo base_url() . '/assets/js/plugins/jquery-jvectormap.js' ?>" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo base_url() . '/assets/js/plugins/moment.min.js' ?>"></script>
<!--  DatetimePicker   -->
<script src="<?php echo base_url() . '/assets/js/plugins/bootstrap-datetimepicker.js' ?>"></script>
<!--  Sweet Alert  -->
<script src="<?php echo base_url() . '/assets/js/plugins/sweetalert2.min.js' ?>" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="<?php echo base_url() . '/assets/js/plugins/bootstrap-tagsinput.js' ?>" type="text/javascript"></script>
<!--  Sliders  -->
<script src="<?php echo base_url() . '/assets/js/plugins/nouislider.js' ?>" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="<?php echo base_url() . '/assets/js/plugins/bootstrap-selectpicker.js' ?>" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="<?php echo base_url() . '/assets/js/plugins/jquery.validate.min.js' ?>" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?php echo base_url() . '/assets/js/plugins/jquery.bootstrap-wizard.js' ?>"></script>
<!--  Bootstrap Table Plugin -->
<script src<?php echo base_url() . '/assets/js/plugins/bootstrap-table.js' ?>"></script>
<!--  DataTable Plugin -->
<script src="<?php echo base_url() . '/assets/js/plugins/jquery.dataTables.min.js' ?>"></script>
<!--  Full Calendar   -->
<script src="<?php echo base_url() . '/assets/js/plugins/fullcalendar.min.js' ?>"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url() . '/assets/js/light-bootstrap-dashboard790f.js?v=2.0.1' ?>" type="text/javascript"></script>
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url() . '/assets/js/demo.js' ?>"></script>

</html>