<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Halaman Print </title>
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
        width: 210mm;
        min-height: 100mm;
        padding: 20mm;
        margin: 10mm auto;
        /* border: 1px #D3D3D3 groove; */
        /* border-radius: 5px; */
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .subpage {
        padding: 1cm;
        margin-top: 0cm;
        /* border: 5px red groove; */
        height: 100mm;
        /* outline: 2cm #FFEAEA groove; */
    }

    @page {
        size: A4;
        margin: 0;
    }

    @media print {

        html,
        body {
            width: 210mm;
            height: 297mm;
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
    <?php
   
    foreach ($reg as $a) :
        $ID_REG = $a->ID_REG;
        if ($a->JENIS == "lab") {
            $JENIS = "Izin Operasional Laboraturium";
        } else if ($a->JENIS == "pend") {
            $JENIS = "Izin Operasional Pendidikan";
        } else if ($a->JENIS == "kons") {
            $JENIS = "Izin Jasa Konstruksi";
        }
        $NAMA = $a->NAMA;
        $ALAMAT = $a->ALAMAT;
        $KELURAHAN = $a->KELURAHAN;
        $KECAMATAN = $a->KECAMATAN;
        $KOTA = $a->KOTA;
        $PROVINSI = $a->PROVINSI;
        $PENANGGUNG_JAWAB = $a->PENANGGUNG_JAWAB;
        $NO_TELP = $a->NO_TELP;
    endforeach;
   
    
    ?>
    <div class="book">
        <div class="page">
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
                </table> <hr size="5%" color="#000000" >
            <div class="subpage">
            
                <h3 align=center>
                    BUKTI REGISTRASI
                </h3>
                Berikut Nomor Register Anda Yang Wajib disimpan harap simpan bukti register ini sebagai bukti Pendaftaran :
                <br>
                <h4>
                <table>
                    <tr>
                        <td style="color:white;opacity:0"> 2300909 </td>
                        <td> 
                            Nomor Register
                        </td>
                        <td> 

                            : <?php echo $ID_REG ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            Nama Izin
                        </td>
                        <td>
                            
                            : <?php echo $NAMA ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            Jenis Izin
                        </td>
                        <td>
                            
                            : <?php echo $JENIS ?>
                        </td>
                    </tr>

                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            Alamat Izin
                        </td>
                        <td>
                            
                            : <?php echo $ALAMAT ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            Penanggung Jawab
                        </td>
                        <td>
                            
                            : <?php echo $PENANGGUNG_JAWAB ?>
                        </td>
                    </tr>

                    </tr>
                </table>
                </h4>
               
            </div>
        </div>

   
    </div>
</body>

</html>
<script type="text/javascript">
    window.print();
</script>