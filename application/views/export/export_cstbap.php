<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Halaman Print </title>
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
</head>
<style type="text/css">
    /* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        /* background-color: #FAFAFA; */
        font: 12pt "Times New Roman";
    }

    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    .page {
        height: 210mm;
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        /* border: 1px #D3D3D3 groove; */
        /* border-radius: 5px; */
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .subpage {
        padding: 0.5cm;
        margin-top: 1cm;
        /* border: 5px red groove; */
        height: 252mm;
        /* outline: 2cm #FFEAEA groove; */
    }

    @page {
        size: A4;
        margin: 0;
    }

    @media print {

        html,
        body {
            height: 210mm;
            width: 297mm;
        }

        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>

<body>
    <div class="book">
        <div class="page">
            <div class="subpage">

                <table width="100%">
                    <tr>
                        <td>
                            <img src="<?php echo base_url() ?>/assets/Picture1.png"> </img>

                        </td>
                        <td colspan=10 align="center">
                            <B>PEMERINTAH KOTA BANJARMASIN<br>
                                DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU</b><br>
                            Jl. Sultan Adam RT.28 No. 49 Kota Banjarmasin 70122 <br>
                            Telepon/Faksimile (0511)3305525<br>
                            Pos-el dpmptsp.banjarmasin@gmail.com<br>
                        </td>
                    </tr>
                </table>
                <hr size="5%" color="#000000" >
                <BR>
                <BR>
                <div class="row">
                    <div class="col-md-12">
                        <b>
                            <h2 align=center>List Berkas Surat Tugas Perizinan</h2>
                        </b>
                        <table border="1" width="100%">

                            <thead>

                                <tr>
                                    <th>ID REG</th>
                                    <th>NO BAP</th>
                                    <th>NO ST</th>


                                    <th>NAMA</th>
                                    <th>ALAMAT</th>
                                    <th>PIC</th>

                                    <th>TANGGAL ST</th>
                                    <th>PETUGAS 1</th>
                                    <th>PETUGAS 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($list as $a) :

                                ?>
                                    <tr>
                                        <td><?php echo $a->ID_REG ?></td>
                                        <td><?php echo $a->NO_BAP ?></td>
                                        <td><?php echo $a->NO_SURAT ?></td>

                                        <td><?php echo $a->NAMA_IZIN ?></td>
                                        <td><?php echo $a->ALAMAT_IZIN ?></td>
                                        <td><?php echo $a->NAMA_PEMOHON ?></td>

                                        <td><?php echo $a->TGL_ST ?></td>
                                        <td><?php echo $a->NIP_PETUGAS1 ?></td>
                                        <td><?php echo $a->NIP_PETUGAS2 ?></td>
                                    </tr>
                                <?php


                                endforeach;
                                ?>
                                </tfoot>
                        </table>
                        <br><br>
                        <b>
                            Mengetahui, <br>
                            Kepala Dinas
                            <br><br><br><br>

                            Ir. MURAYATNA, MT<br>
                            NIP. 19620709 199003 1 008 
                        </b>
        

                    </div>

                </div>


            </div>
        </div>



    </div>
</body>

</html>
<script type="text/javascript">
    window.print()
</script>

<script src="<?php echo base_url() ?>/assets/js/core/bootstrap.min.js" type="text/javascript"></script>