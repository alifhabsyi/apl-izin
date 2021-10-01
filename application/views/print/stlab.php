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
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        /* border: 1px #D3D3D3 groove; */
        /* border-radius: 5px; */
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .subpage {
        padding: 1cm;
        margin-top: 2cm;
        /* border: 5px red groove; */
        height: 237mm;
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
                </table><hr size="5%" color="#000000" >
            <div class="subpage">
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
                foreach ($stbap as $b) :
                    $NO_SURAT = $b->NO_SURAT;
                    $TGL_ST = $b->TGL_ST;
                    $KETERANGAN_BAP = $b->KETERANGAN_BAP;
                    $HASIL = $b->HASIL;
                    $NO_BAP = $b->NO_BAP;


                endforeach;
                foreach ($nip1 as $y) :
                    $NAMAP1 = $y->NAMA;
                    $NIPP1 =  $y->NIP;
                    $JABATANP1 =  $y->JABATAN;
                endforeach;
                foreach ($nip2 as $z) :
                    $NAMAP2 = $z->NAMA;
                    $NIPP2 =  $z->NIP;
                    $JABATANP2 =  $z->JABATAN;
                endforeach;
                ?>
               
                <table align="center">
                    <tr align="center">
                        <td align="center">
                            <b style="font:13.5pt">
                                <u align="center">SURAT TUGAS </u>
                            </b>
                        </td>
                    </tr>
                    <tr align="center">
                        <td align="center">
                            <b style="font:13.5pt" align="center">NOMOR : <?php echo $NO_SURAT ?></b>

                        </td>
                    </tr>
                </table>




                <br><br>
                Dasar : &nbsp;&nbsp;Kegiatan Rapat-Rapat Koordinasi, Monitoring dan Evaluasi Dalam Daerah
                <table>
                    <tr>
                        <td>Kepada</td>
                        <td>1.</td>
                        <td> Nama / NIP</td>
                        <td>: <?php echo $NAMAP1 . ' / ' . $NIPP1 ?> </td> <!--  -->
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Pangkat / Gol</td>
                        <td>: <?php echo $JABATANP1 ?></td> <!-- -->
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Jabatan </td>
                        <td>: Pelaksana DPMPTSP Kota Banjarmasin</td> <!-- -->
                    </tr>
                    <tr>
                        <td>Kepada</td>
                        <td>2.</td>
                        <td> Nama / NIP</td>
                        <td>: <?php echo $NAMAP2 . ' / ' . $NIPP2 ?></td> <!-- -->
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Pangkat / Gol</td>
                        <td>: <?php echo $JABATANP1 ?> </td> <!-- -->
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Jabatan </td>
                        <td>: Pelaksana DPMPTSP Kota Banjarmasin</td> <!-- -->
                    </tr>
                </table>
                <br>
                Untuk &nbsp;&nbsp;: Melaksanakan Survei dan Identifikasi lapangan terhadap permohonan Izin Laboraturium a.n. :
                <br>
                <table>
                    <tr>
                        <td style="color:white;opacity:0"> 2300909 </td>
                        <td>1.</td>
                        <td>
                            NOMOR REGISTER
                            <?php echo $ID_REG ?>
                        </td>
                    <tr>
                    <tr>
                        <td style="color:white;opacity:0"> 2300909 </td>
                        <td></td>
                        <td>
                            
                            <?php echo $NAMA ?>
                        </td>
                    <tr>
                        <td></td>
                        <td>

                        </td>
                        <td>
                           
                            <?php echo $ALAMAT ?>
                        </td>
                    </tr>

                    </tr>
                </table>
                Tujuan : &nbsp;&nbsp;Melengkapi persyaratan Pembuatan Izin Laboraturium
                <br>
                Demikian Surat Tugas ini diberikan, agar yang bersangkutan melaksanakannya dengan baik dan penuh tanggung jawab.
                <br>
                <br>
                <table ALIGN=RIGHT>
                    <tr>
                        <td>Dikeluarkan di : Banjarmasin </td>

                    </tr>
                    <tr>
                        <td>Pada Tanggal : <?php echo $TGL_ST ?> </td>

                    </tr>
                    <tr style="color:white;opacity:0">
                        <td rowspan="1" style="color:white;opacity:0">
                            123123
                        </td>

                    </tr>
                    <tr>
                        <td rowspan="1" align="center">Kepala Dinas,</td>

                    </tr>
                    <tr>
                        <td rowspan="1" style="color:white;opacity:0">
                            123123
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="1" style="color:white;opacity:0">
                            123123
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="1" style="color:white;opacity:0">
                            123123
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="1" style="color:white;opacity:0">
                            123123
                        </td>
                        <td rowspan="1" style="color:white;opacity:0">
                            123123
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="1" align="center"><b>Ir. MURAYATNA, MT</b></td>

                    </tr>
                    <tr>

                        <td align="center">GOLONGAN</td>

                    </tr>
                    <tr>

                        <td rowspan="1" align="center">NIP.19620709 199003 1 008 </td>

                    </tr>

                </table>
            </div>
        </div>

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
                </table><hr size="5%" color="#000000" >
            <div class="subpage">
           
                <table align="center">
                    <tr>
                        <td align="center">
                            <b style="font:13.5pt">
                                BERITA ACARA
                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <b style="font:13.5pt"><u>HASIL SURVEI DAN IDENTIFIKASI LAPANGAN</u></b> </p>
                            <!--$nomor -->
                        </td>
                    </tr>
                </table>
                <br>
                Pada hari ini,
                <?php echo $TGL_ST ?>
                Berdasarkan Surat Perintah Tugas Survei dan Identifikasi Lapangan Kepala DPMPTSP Kota Banjarmasin No.
                <?php echo $NO_BAP ?> tanggal
                <?php echo $TGL_ST ?>, telah dilaksanakan peninjauan lapangan untuk survey dan identifikasi lapangan terhadap permohonan Izin Operasional Laboraturium, Dokumen No.
                <?php echo $NO_SURAT ?>atas nama <?php echo $NAMA ?><?php echo $ALAMAT ?><?php echo $KELURAHAN ?><?php echo $KECAMATAN ?> <?php echo $PROVINSI ?>
                <!-- CV. ALISA MITRA KONSULTAN  terletak di  JL. RAWASARI KOMP. TIRTASARI NO.10 RT.061 BLOK C RT.061 RW.005 , TELUK DALAM, BANJARMASIN TENGAH-->
                dengan hasil sebagai berikut :
                <table>
                    <tr>
                        <td>
                            Papan
                        </td>
                        <td>
                            Nama Perusahaan
                        </td>
                        <td>
                            (&nbsp;&nbsp;) Ada
                        </td>
                        <td>
                            (&nbsp;&nbsp;) Tidak
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>
                            Luas Bangunan Laboraturium
                        </td>
                        <td>
                            .....................
                        </td>
                        <td>
                            M2
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>
                            Mesin Ketik / Komputer / Laptop
                        </td>
                        <td>
                            .....................
                        </td>
                        <td>
                            Buah
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>
                            Microskop
                        </td>
                        <td>
                            .....................
                        </td>
                        <td>
                            Buah
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>
                            Alat Ukur
                        </td>
                        <td>
                            .....................
                        </td>
                        <td>
                            Buah
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>
                            Penampungan Limbah
                        </td>
                        <td>
                            .....................
                        </td>
                        <td>
                            Buah
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>
                            Mobil Operasional
                        </td>
                        <td>
                            .....................
                        </td>
                        <td>
                            Buah
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>
                            Alamat Perusahaan
                        </td>
                        <td>
                            (&nbsp;&nbsp;) Benar
                        </td>
                        <td>
                            (&nbsp;&nbsp;) Tidak Benar
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>
                            Tenaga Teknik Tugas Penuh
                        </td>
                        <td>
                            (&nbsp;&nbsp;) Benar
                        </td>
                        <td>
                            (&nbsp;&nbsp;) Tidak Benar
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>
                            Peralatan / Perlengkapan Kantor
                        </td>
                        <td>
                            (&nbsp;&nbsp;) Benar
                        </td>
                        <td>
                            (&nbsp;&nbsp;) Tidak Benar
                        </td>
                    </tr>
                </table>
                Berdasarkan hasil survei dan identifikasi lapangan:
                (&nbsp;&nbsp;&nbsp;) telah sesuai dan memenuhi ketentuan teknis.
                (&nbsp;&nbsp;&nbsp;) tidak sesuai dan tidak memenuhi ketentuan teknis
                <br>
                Demikian Berita Acara ini dibuat untuk diteruskan/dimintakan rekomendasi dari SKPD Teknis Pemerintah Kota Banjarmasin.

                <p align="right">
                    Banjarmasin, Tanggal
                    <!-- -->
                </p>
                <br>
                <table style="width:100%;border:1px groove black;border-collapse: collapse;">
                    <tr style="border:1px groove black;border-collapse: collapse;">
                        <td style="border:1px groove black;border-collapse: collapse;">
                            1.
                        </td>
                        <td style="border:1px groove black;border-collapse: collapse;">
                            <?php echo $NAMAP1 ?>
                        </td>
                        <td style="border:1px groove black;border-collapse: collapse;">
                            <?php echo $NIPP1 ?>
                        </td>
                    </tr>
                    <tr style="border:1px groove black;border-collapse: collapse;">
                        <td style="border:1px groove black;border-collapse: collapse;">
                            2.
                        </td>
                        <td style="border:1px groove black;border-collapse: collapse;">
                            <?php echo $NAMAP2 ?>
                        </td>
                        <td style="border:1px groove black;border-collapse: collapse;">
                            <?php echo $NIPP2 ?>
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <br>
                <Table>
                    <tr>
                        <td>Kasi. Koordinasi Lapangan dan</td>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                        <td>Pemohon / Penanggung Jawab</td>
                    </tr>
                    <tr>
                        <td>Penelitian Perizinan Jasa Usaha</td>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                        <td>Yang disurvey</td>
                    </tr>
                    <tr>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                    </tr>
                    <tr>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                    </tr>
                    <tr>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                    </tr>
                    <tr>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                    </tr>
                    <tr>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                    </tr>
                    <tr>
                        <td><b><u>Muhammad Tjandra S.SE</u></b></td>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                        <td>(...........................)</td>
                    </tr>
                    <tr>
                        <td>NIP. 19710227 200604 1 019</td>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                        <td style="color:white;opacity:0;">0000000000000000</td>
                    </tr>
                </Table>
            </div>
        </div>

    </div>
</body>

</html>
<script type="text/javascript">
    window.print();
</script>