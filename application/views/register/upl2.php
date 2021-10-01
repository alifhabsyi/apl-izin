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
                                        <h2 class="card-title">Permohonan Izin Lembaga Pendidikan</h2>
                                        <h4 class="card-subtitle">Form Pendaftaran Izin Lembaga Pendidikan</h4>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <form class='form-horizontal' id='submit' action="<?php echo base_url(); ?>register/upload2" method='post' enctype='multipart/form-data'>


                                <div class="row">

                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label style="color:white" for="">ID REGISTRASI</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" readonly placeholder="" value="<?php echo $this->input->get('n') ?>" class="form-control" name="id_reg" id="id_reg" required>
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label style="color:white" for="">AKTA NOTARIS</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="file"  class="form-control" required name="akta_notaris" id="akta_notaris">
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label style="color:white" for="">IMB</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="file"  class="form-control" required name="imb" id="imb">
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label style="color:white" for="">SPPL</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="file"  class="form-control" required name="sppl" id="sppl">
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label style="color:white" for="">NIB</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="file"  class="form-control" required name="nib" id="nib">
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label style="color:white" for="">Surat Rekomendasi Dinas Pendidikan</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="file" placeholder="" class="form-control" required name="sr_dispen" id="sr_dispen">
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label style="color:white" for="">Izin Usaha</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="file" placeholder="" class="form-control" required name="izin_usaha" id="izin_usaha">
                                                </div>
                                                <div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label style="color:white" for="">Izin Lokasi Bangunan</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="file" placeholder="" required class="form-control" name="izin_lokasi" id="izin_lokasi">
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label style="color:white" for="">SLF</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="file" placeholder="" required class="form-control" name="slf" id="slf">
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label style="color:white" for="">SKTU</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="file" placeholder="" required class="form-control" name="sktu" id="sktu">
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label style="color:white" for="">Proposal Dispen</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="file" placeholder="" required class="form-control" name="proposal_dispen" id="proposal_dispen">
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label style="color:white" for="">IMB</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="file" placeholder="" required class="form-control" name="imb" id="imb">
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label style="color:white" for="">SP KOMITMEN</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="file" placeholder="" required class="form-control" name="SP_KOMITMEN" id="SP_KOMITMEN">
                                                </div>
                                                <div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-12" align=center>
                                        <a data-target="#myModal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#myModal">Submit</a>
                                        
                                    </div>




                                </div>



                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color:red">PERHATIAN !!!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                MOHON DIPERHATIKAN DATA YANG DI UPLOAD HARUS SESUAI DENGAN KETENTUAN. <b>APABILA SUDAH MELAKUKAN SUBMIT DATA TIDAK DAPAT DI UBAH!!!<b>
                                                        <br> KLIK SUBMIT APABILA SUDAH SELESAI!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>







                            </form>
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