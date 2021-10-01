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
        padding: 10mm;
        margin: 10mm auto;
        /* border: 1px #D3D3D3 groove; */
        /* border-radius: 5px; */
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .subpage {
        padding: 0.3cm;
        margin-top: 0.3cm;
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
                        $JENIS = " Operasional Laboratorium";
                        $BIDANG ="Kesehatan";
                    } else if ($a->JENIS == "pend") {
                        $JENIS = " Operasional Pendidikan";
                        $BIDANG ="Pendidikan";
                    } else if ($a->JENIS == "kons") {
                        $JENIS = " Jasa Konstruksi";
                        $BIDANG ="Konstruksi";
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
                foreach ($sk as $n) :
                    $NO_SK = $n->NO_SK;
                    $TGL_SK =  $n->TGL_SK;
                    $NIP_PETUGAS =  $n->NIP_PETUGAS;
                endforeach;
                ?>
                
                <table align="center">
                    <tr align="center">
                        <td align="center">
                            <b align="center" style="font:13.5pt">
                                KEPUTUSAN KEPALA DINAS PENANAMAN MODAL DAN
                            </b>
                        </td>
                    </tr>
                    <tr align="center">
                        <td align="center">
                            <b align="center" style="font:13.5pt">
                                PELAYANAN TERPADU SATU PINTU
                            </b>
                        </td>
                    </tr>
                    <tr align="center">
                        <td align="center">
                            NOMOR : <?php echo $NO_SK?>

                        </td>
                    </tr>
                </table>
<br>
                <table>
                    <tr>
                        <td>Membaca</td>
                        <td> : </td>
                        <td>
                            Surat Permohonan Saudara <?php echo $PENANGGUNG_JAWAB?> Nomor <?php echo $NO_SURAT?> untuk memperoleh Izin <?php echo $JENIS?>.
                        </td>
                    </tr>
                    <tr>
                        <td>Menimbang</td>
                        <td> : </td>
                        <td>
                            Bahwa pemohon telah memenuhi persyaratan untuk melaksanakan kegiatan <b><?php echo $JENIS?>.</b>

                        </td>
                    </tr>
                    <tr>
                        <td>Mengingat</td>
                        <td> : </td>
                        <td>
                            1. Undang-Undang Republik Indonesia Tentang <?php echo $BIDANG?>

                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>  </td>
                        <td>
                            2. Peraturan Pemerintah Republik Indonesia Tentang Tenaga <?php echo $BIDANG?>

                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>  </td>
                        <td>
                            3. Keputusan Menteri Republik Indonesia Tentang <?php echo $JENIS?>
                        </td>
                    </tr>
            

                    <tr>

                </table>
                <p align=center>
                <b align="center" style="font:13.5pt">
                    MEMUTUSKAN 
                </b>
                </p>
              
                <table>
                    <tr>
                        <td>Menetapkan</td>
                        <td>:</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Pertama</td>
                        <td>:</td>
                        <td colspan="3">Memberikan <?php echo $JENIS ?> Kepada</td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $NAMA?></td>
                        
                    </tr>
                   
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $ALAMAT?></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Kelurahan</td>
                        <td>:</td>
                        <td><?php echo $KELURAHAN?></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td><?php echo $KECAMATAN?></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Kota</td>
                        <td>:</td>
                        <td><?php echo $KOTA?></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Provinsi</td>
                        <td>:</td>
                        <td><?php echo $PROVINSI?></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Pemilik</td>
                        <td>:</td>
                        <td><?php echo $PENANGGUNG_JAWAB?></td>
                        
                    </tr>
                    <tr align="top">
                        <td align="top">Kedua</td>
                        <td>:</td>
                        <td colspan="3">
                            Dengan dikeluarkannya Keputusan ini penyelenggaran <?php echo $JENIS?> dalam kegiatannya diwajibkan mengikuti peraturan perundang undangan yang berlaku
                        </td>
                        
                    </tr>
                    <tr align="top">
                        <td align="top">Ketiga</td>
                        <td>:</td>
                        <td colspan="3">
                            Keputusan ini dapat dicabut apabila yang bersangkutan tidak memenuhi ketentuan peraturan perundang-undangan yang berlaku.    
                        </td>
                        
                    </tr>
                    <tr align="top">
                        <td align="top">Keempat</td>
                        <td>:</td>
                        <td colspan="3">
                            Keputusan ini berlaku selama 5(lima) tahun dari tanggal yang ditetapkan dan diwajibkan untuk registrasi ulang setiap 1 (satu) tahun sekali.
                        </td>
                        
                    </tr>
                    <tr align="top">
                        <td align="top">Kelima</td>
                        <td>:</td>
                        <td colspan="3">
                            Keputusan ini berlakuk sejak tanggal ditetapkan dan akan ditinjau kembali apabila kemudian hari ternyata terdapat kekeliruan.
                        </td>
                        
                    </tr>
                    
                </table>
                <br>


                <table ALIGN=RIGHT>
                    <tr>
                        <td>Dikeluarkan di : Banjarmasin </td>

                    </tr>
                    <tr>
                        <td>Pada Tanggal : <?php echo $TGL_SK ?> </td>

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

                        <td align="center">Pembina Utama Muda</td>

                    </tr>
                    <tr>

                        <td rowspan="1" align="center">NIP. 19620709 199003 1 008  </td>

                    </tr>

                </table>
            </div>
        </div>



    </div>
</body>

</html>
<script type="text/javascript">
    window.print();
</script>