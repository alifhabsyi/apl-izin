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
        <div class="full-page register-page section-image" data-color="green" data-image="../../assets/img/bg5.jpg">
            <div class="content">
                <div class="container">
                    <div class="card card-register card-plain text-center">
                        <div class="card-header ">
                            <div class="row  justify-content-center">
                                <div class="col-md-8">
                                    <div class="header-text">
                                        <h2 class="card-title">Kritik & Saran</h2>
                                        <h4 class="card-subtitle">Pada Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu Kota Banjarmasin</h4>
                                        <hr />

                                    </div>
                                </div>
                            </div>
                        </div>
 <div class="card-body ">
                            <div class="col-md-12" align=center>
                                <form class='form-horizontal' id='submit' action="<?php echo base_url() ?>register/addsaran" method='post' enctype='multipart/form-data'>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <input type="text" placeholder="Kode Pengajuan" name="id_reg" id="id_reg" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="saran" id="saran" class="form-control" placeholder="Kritik & Saran">

                                            </textarea>
                                        </div>
                                        <button class="btn btn-info btn-wd">Submit Kritik & Saran</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <div class="card-body ">
                        <div class="fresh-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0"  width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID REG</th>
                                        <th>JENIS</th>
                                        <th>PIC</th>
                                        <th>STATUS</th>
                                        <th>SARAN</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($list as $a) :
                                        if ($a->JENIS == "lab") {
                                            $JENIS = "Izin Operasional Laboraturium";
                                        } else if ($a->JENIS == "pend") {
                                            $JENIS = "Izin Operasional Pendidikan";
                                        } else if ($a->JENIS == "kons") {
                                            $JENIS = "Izin Jasa Konstruksi";
                                        }
                                    ?>
                                        <tr>
                                            <td><?php echo $a->ID_REG ?></td>
                                            <td><?php echo $JENIS ?></td>
                                            <td><?php echo $a->PENANGGUNG_JAWAB ?></td>
                                            <td><?php echo $a->STATUS ?></td>
                                            <td><?php echo $a->SARAN ?></td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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
<script src="<?php echo base_url() . 'assets/js/core/jquery.3.2.1.min.js' ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'assets/js/core/popper.min.js' ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'assets/js/core/bootstrap.min.js' ?>" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url() . 'assets/js/plugins/bootstrap-switch.js' ?>"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Chartist Plugin  -->
<script src="<?php echo base_url() . 'assets/js/plugins/chartist.min.js' ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url() . 'assets/js/plugins/bootstrap-notify.js' ?>"></script>
<!--  Share Plugin -->
<script src="<?php echo base_url() . 'assets/js/plugins/jquery.sharrre.js' ?>"></script>
<!--  jVector Map  -->
<script src="<?php echo base_url() . 'assets/js/plugins/jquery-jvectormap.js' ?>" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo base_url() . 'assets/js/plugins/moment.min.js' ?>"></script>
<!--  DatetimePicker   -->
<script src="<?php echo base_url() . 'assets/js/plugins/bootstrap-datetimepicker.js' ?>"></script>
<!--  Sweet Alert  -->
<script src="<?php echo base_url() . 'assets/js/plugins/sweetalert2.min.js' ?>" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="<?php echo base_url() . 'assets/js/plugins/bootstrap-tagsinput.js' ?>" type="text/javascript"></script>
<!--  Sliders  -->
<script src="<?php echo base_url() . 'assets/js/plugins/nouislider.js' ?>" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="<?php echo base_url() . 'assets/js/plugins/bootstrap-selectpicker.js' ?>" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="<?php echo base_url() . 'assets/js/plugins/jquery.validate.min.js' ?>" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?php echo base_url() . 'assets/js/plugins/jquery.bootstrap-wizard.js' ?>"></script>
<!--  Bootstrap Table Plugin -->
<script src<?php echo base_url() . 'assets/js/plugins/bootstrap-table.js' ?>"></script>
<!--  DataTable Plugin -->
<script src="<?php echo base_url() . 'assets/js/plugins/jquery.dataTables.min.js' ?>"></script>
<!--  Full Calendar   -->
<script src="<?php echo base_url() . 'assets/js/plugins/fullcalendar.min.js' ?>"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url() . 'assets/js/light-bootstrap-dashboard790f.js?v=2.0.1' ?>" type="text/javascript"></script>
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url() . 'assets/js/demo.js' ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

        demo.initVectorMap();

    });
</script>
<!-- Facebook Pixel Code Don't Delete -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        }
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');

    try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    } catch (err) {
        console.log('Facebook Track Error:', err);
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record?
        // table.on('click', '.edit', function() {
        //     $tr = $(this).closest('tr');

        //     if ($tr.hasClass('child')) {
        //         $tr = $tr.prev('.parent');
        //     }

        //     var data = table.row($tr).data();
        //     alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        // });

        // // Delete a record
        // table.on('click', '.remove', function(e) {
        //     $tr = $(this).closest('tr');
        //     table.row($tr).remove().draw();
        //     e.preventDefault();
        // });

        // // Like record
        // table.on('click', '.like', function() {
        //     alert('You clicked on Like button');
        // });
    });
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->


<!-- Mirrored from demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jul 2021 08:52:51 GMT -->

</html>