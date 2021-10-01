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
                                        <h2 class="card-title">Permohonan Izin Laboratorium</h2>
                                        <h4 class="card-subtitle">Form Pendaftaran Izin Laboratorium</h4>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <?php
                            if ($this->input->get('n')) {
                                echo "<form class='form-horizontal' id='editsub' action='";
                                echo base_url();
                                echo "register/editreg1' method='post' enctype='multipart/form-data' >";
                            } else {
                                echo "<form class='form-horizontal' id='submit' action='";
                                echo base_url();
                                echo "register/addreg1' method='post' enctype='multipart/form-data'>";
                            }
                            ?>
                            <div class="row">

                                <div class="col-md-6">
                                    <input type="hidden" name="jenis" id="jenis" value="lab" <div class="content">

                                    <div class="form-group">
                                        <input type="text" placeholder="Nama Laboratorium" class="form-control" name="nama" id="nama">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Alamat Laboratorium" class="form-control" name="alamat" id="alamat">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Kelurahan" class="form-control" name="kelurahan" id="kelurahan">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Kecamatan" class="form-control" name="kecamatan" id="kecamatan">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Kota" class="form-control" name="kota" id="kota">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Provinsi" class="form-control" name="provinsi" id="provinsi">
                                    </div>




                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Penanggung Jawab" class="form-control" name="penanggung_jawab" id="penanggung_jawab">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="NIK KTP" class="form-control" name="nik" id="nik">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="No Telepon" class="form-control" name="no_telp" id="no_telp">
                                    </div>
                                    <div class="footer text-center">
                                        <button type="submit" class="btn btn-fill btn-neutral btn-wd">Submit</button>
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