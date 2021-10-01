<div class="full-page register-page section-image" data-color="orange" data-image="../../assets/img/bg5.jpg">
    <div class="content">
        <div class="container">
            <div class="card card-register card-plain text-center">
                <div class="card-header ">
                    <div class="row  justify-content-center">
                        <div class="col-md-8">
                            <div class="header-text">
                                <h2 class="card-title">Permohonan Izin </h2>
                                <H5 class="card-subtitle">Data Surat Tugas</H5>
                                <hr />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <form class='form-horizontal' id='submit' action="addsk" method='post' enctype='multipart/form-data'>

                        <?php
                        foreach ($reg as $a) :
                            $ID_REG = $a->ID_REG;
                            if ($a->JENIS == "lab") {
                                $JENIS = "Izin Operasional Laboraturium";
                                $jen= "LAB";
                            } else if ($a->JENIS == "pend") {
                                $JENIS = "Izin Operasional Pendidikan";
                                $jen= "PEND";
                            } else if ($a->JENIS == "kons") {
                                $JENIS = "Izin Jasa Konstruksi";
                                $jen= "KONS";
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

                        <div class="row" style="color:white">
                            <input type=hidden value="<?php echo $a->ID_REG; ?>" name="id_reg" id="id_reg">
                            <input type=hidden value="<?php echo $jen; ?>" name="jen" id="jen">
                            
                            <div class="col-md-12">
                                <p align=center>Petugas Pemeriksa</p>
                                <table style="width:100%">

                                    <tr>
                                        <td>
                                            <?php echo $NIPP1 ?>
                                        </td>
                                        <td> <?php echo $NAMAP1 ?></td>
                                        <td> <?php echo $JABATANP1 ?> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $NIPP2 ?>
                                        </td>
                                        <td> <?php echo $NAMAP2 ?></td>
                                        <td> <?php echo $JABATANP2 ?> </td>
                                    </tr>
                                </table>
                            </div>
                            <br><br>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        No Surat :
                                    </div>
                                    <div class="col-md-6">
                                        <input readonly type="text" class="form-control" placeholder="Autogenerated" name="no_surat" id="no_surat">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        Tanggal Aktif SK :
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" name="tgl_sk" id="tgl_sk">
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Surat Keputusan</button>
                        </div>
                        <br>
                        <table style="width:100%">
                            <tr align="Left">
                                <td>
                                    ID Registrasi
                                </td>
                                <td>
                                    <?php
                                    echo $ID_REG
                                    ?>
                                </td>
                                <td>
                                    Jenis
                                </td>
                                <td>
                                    <?php
                                    echo $JENIS
                                    ?>
                                </td>

                            </tr>
                            <tr align="Left">
                                <td>
                                    Nama Izin
                                </td>
                                <td>
                                    <?php
                                    echo $NAMA
                                    ?>
                                </td>
                                <td>
                                    Alamat Izin
                                </td>
                                <td>
                                    <?php
                                    echo $ALAMAT
                                    ?>
                                </td>

                            </tr>
                            <tr align="Left">
                                <td>
                                    Kelurahan
                                </td>
                                <td>
                                    <?php
                                    echo $KELURAHAN
                                    ?>
                                </td>
                                <td>
                                    Kecamatan
                                </td>
                                <td>
                                    <?php
                                    echo $KECAMATAN
                                    ?>
                                </td>

                            </tr>
                            <tr align="Left">
                                <td>
                                    Kota
                                </td>
                                <td>
                                    <?php
                                    echo $KOTA
                                    ?>
                                </td>
                                <td>
                                    Provinsi
                                </td>
                                <td>
                                    <?php
                                    echo $PROVINSI
                                    ?>
                                </td>

                            </tr>
                            <tr align="Left">
                                <td>
                                    Penannggu Jawab
                                </td>
                                <td>
                                    <?php
                                    echo $PENANGGUNG_JAWAB
                                    ?>
                                </td>
                                <td>
                                    No Telepon
                                </td>
                                <td>
                                    <?php
                                    echo $NO_TELP
                                    ?>
                                </td>

                            </tr>

                        </table>
                        <br>

                    </form>

                </div>
            </div>
        </div>
    </div>