
<div class="full-page register-page section-image" data-color="orange" data-image="../../assets/img/bg5.jpg">
    <div class="content">
        <div class="container">
            <div class="card card-register card-plain text-center">
                <div class="card-header ">
                    <div class="row  justify-content-center">
                        <div class="col-md-8">
                            <div class="header-text">
                                <h2 class="card-title">Permohonan Izin </h2>
                                <H5 class="card-subtitle">Data Pengajuan Registrasi Izin</H5>
                                <hr />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <?php foreach ($reg as $a) : ?>
                    <?php if($a->STATUS=="UPL"){ ?>
                    <form class='form-horizontal' id='submit' action="verifikasi" method='post' enctype='multipart/form-data'>
                    <?php } else {?>
                    <form class='form-horizontal' id='submit' action="editregadmin" method='post' enctype='multipart/form-data'>
                    <?php } ?>
                        <div class="row">
                            <?php 
                                 if ($a->JENIS == "lab") {
                                    $JENIS = "Izin Operasional Laboraturium";
                                } else if ($a->JENIS == "pend") {
                                    $JENIS = "Izin Operasional Pendidikan";
                                } else if ($a->JENIS == "kons") {
                                    $JENIS = "Izin Jasa Konstruksi";
                                }
                                ?>
                                <div class="col-md-6">

                                

                                    <H5 ALIGN="LEFT">
                                        <div class='row'>
                                            <div class="col-md-6">
                                                ID REG
                                            </div>
                                            <div class="col-md-6">
                                                <input type=text name="id_reg" id="id_reg" class="form-control" value="<?php echo $a->ID_REG; ?>" readonly>
                                             
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-6">
                                                JENIS
                                            </div>
                                            <div class="col-md-6">
                                            <input type=text name="jenis" id="jenis" class="form-control" value="<?php echo $a->JENIS; ?>" readonly >
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-6">
                                                NAMA IZIN
                                            </div>
                                            <div class="col-md-6">
                                            <input type=text name="nama" id="nama" class="form-control" value="<?php echo $a->NAMA; ?>" >

                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-6">
                                                ALAMAT IZIN
                                            </div>
                                            <div class="col-md-6">
                                            <input type=text name="alamat" id="alamat" class="form-control" value="<?php echo $a->ALAMAT; ?>" >

                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-6">
                                                KELURAHAN
                                            </div>
                                            <div class="col-md-6">
                                            <input type=text name="kelurahan" id="kelurahan" class="form-control" value="<?php echo $a->KELURAHAN; ?>" >

                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-6">
                                                KECAMATAN
                                            </div>
                                            <div class="col-md-6">
                                            <input type=text name="kecamatan" id="kecamatan" class="form-control" value="<?php echo $a->KECAMATAN; ?>" >

                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-6">
                                                KOTA
                                            </div>
                                            <div class="col-md-6">
                                            <input type=text name="kota" id="kota" class="form-control" value="<?php echo $a->KOTA; ?>" >

                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-6">
                                                PROVINSI
                                            </div>
                                            <div class="col-md-6">
                                            <input type=text name="provinsi" id="provinsi" class="form-control" value="<?php echo $a->PROVINSI; ?>" >

                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-6">
                                                PENANGGUNG JAWAB
                                            </div>
                                            <div class="col-md-6">
                                            <input type=text name="penanggung_jawab" id="penanggung_jawab" class="form-control" value="<?php echo $a->PENANGGUNG_JAWAB; ?>" >

                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-6">
                                                NO TELEPON
                                            </div>

                                            <div class="col-md-6">
                                            <input type=text name="no_telp" id="no_telp" class="form-control" value="<?php echo $a->NO_TELP; ?>" >

                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-6">
                                                NIK
                                            </div>

                                            <div class="col-md-6">
                                            <input type=text name="nik" id="nik" class="form-control" value="<?php echo $a->NIK; ?>" >

                                            </div>
                                        </div>

                                    </H5>










                                <?php endforeach; ?>
                                </div>


                                <div class="col-md-6">
                                    <?php
                                    if ($reglab < 0) {
                                        // var_dump("reglab <0");exit;
                                    ?>



                                        <H5 ALIGN="LEFT">
                                            <div class='row'>
                                                <div class="col-md-6">
                                                    KTP
                                                </div>

                                                <div class="col-md-6">
                                                    BELUM UPLOAD<BR>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class="col-md-6">
                                                    NPWP
                                                </div>
                                                <div class="col-md-6">
                                                    BELUM UPLOAD<BR>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class="col-md-6">
                                                    GMAP
                                                </div>
                                                <div class="col-md-6">
                                                    BELUM UPLOAD<BR>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class="col-md-6">
                                                    SURAT PERNYATAAN PENANGGUNG JAWAB
                                                </div>
                                                <div class="col-md-6">
                                                    BELUM UPLOAD<BR>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class="col-md-6">
                                                    SURAT PERNYATAAN KESEDIAAN
                                                </div>
                                                <div class="col-md-6">
                                                    BELUM UPLOAD<BR>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class="col-md-6">
                                                    DATA DETAIL BANGUNAN
                                                </div>
                                                <div class="col-md-6">
                                                    BELUM UPLOAD<BR>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class="col-md-6">
                                                    DATA DETAIL PERALATAN
                                                </div>
                                                <div class="col-md-6">
                                                    BELUM UPLOAD<BR>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class="col-md-6">
                                                    SURAT REKOMENDASI DINKES
                                                </div>
                                                <div class="col-md-6">
                                                    BELUM UPLOAD<BR>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class="col-md-6">
                                                    NIB
                                                </div>
                                                <div class="col-md-6">
                                                    BELUM UPLOAD<BR>
                                                </div>
                                            </div>


                                            <div class='row'>
                                                <div class="col-md-6">
                                                    IMB
                                                </div>
                                                <div class="col-md-6">
                                                    BELUM UPLOAD<BR>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class="col-md-6">
                                                    UKL UPL
                                                </div>
                                                <div class="col-md-6">
                                                    BELUM UPLOAD<BR>
                                                </div>
                                            </div>

                                        </H5>









                                        <?php } else if (!empty( $reglab )) {
                                            //  var_dump("reglab >0");exit;
                                        foreach ($reglab as $b) : ?>


                                            <H5 ALIGN="LEFT">
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        KTP
                                                    </div>

                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->KTP;
                                                        echo "' target='_blank' >Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        NPWP
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->NPWP;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        GMAP
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->GMAP;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        SURAT PERNYATAAN PENANGGUNG JAWAB
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->SP_PENANGGUNGJAWAB;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        SURAT PERNYATAAN KESEDIAAN
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->SP_KESEDIAAN;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        DATA DETAIL BANGUNAN
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->DATA_BANGUNAN;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        DATA DETAIL PERALATAN
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->DATA_PERALATAN;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        SURAT REKOMENDASI DINKES
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->SR_DINKES;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        NIB
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->NIB;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>


                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        IMB
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->IMB;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        UKL UPL
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->UKL_UPL;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>

                                            </H5>









                                        <?php endforeach;
                                    } else if (!empty($regpend)) {
                                        // var_dump("regpend >0");exit;
                                        foreach ($regpend as $c) : ?>


                                            <H5 ALIGN="LEFT">
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        AKTA NOTARIS
                                                    </div>

                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $c->AKTA_NOTARIS;
                                                        echo "' target='_blank' >Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        IMB
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $c->IMB;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        SPPL
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $c->SPPL;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        NIB
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $c->NIB;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        SURAT REKOMENDASI DINAS PENDIDIKAN
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $c->SR_DISPEN;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        IZIN USAHA
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $c->IZIN_USAHA;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        IZIN LOKASI
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $c->IZIN_LOKASI;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        SLF
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $c->SLF;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        SKTU
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $c->SKTU;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>


                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        PROPOSAL DINAS PENDIDIKAN
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $c->PROPOSAL_DISPEN;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        SURAT PERNYATAAN KOMITMEN
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $c->SP_KOMITMEN;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>

                                            </H5>









                                        <?php endforeach;
                                    } else if (!empty($regkons)) {
                                        // var_dump("regkons >0");exit;
                                        foreach ($regkons as $d) : ?>


                                            <H5 ALIGN="LEFT">
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        FOTO
                                                    </div>

                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
                                                <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $d->FOTO;
                                                        echo "' target='_blank' >Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        KTP
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
                                                <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $d->KTP;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        IUJK
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
                                                <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $d->IUJK;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        SBUJK
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
                                                <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $d->SBUJK;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        NPWK
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
                                                <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $d->NPWK;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        SKTU
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
                                                <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $d->SKTU;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        SERTIFIKAT KEAHLIAN
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
                                                <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $d->SERTIFIKAT_KEAHLIAN;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        DAFTAR PENGALAMAN
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
                                                <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $d->DAFTAR_PENGALAMAN;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        PJT
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
                                                <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $d->PJT;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>


                                                

                                            </H5>









                                        <?php endforeach;
                                    } else {
                                        foreach ($reglab as $b) : ?>


                                            <H5 ALIGN="LEFT">
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        KTP else
                                                    </div>

                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->KTP;
                                                        echo "' target='_blank' >Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        NPWP
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->NPWP;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        GMAP
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->GMAP;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        SURAT PERNYATAAN PENANGGUNG JAWAB
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->SP_PENANGGUNGJAWAB;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        SURAT PERNYATAAN KESEDIAAN
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->SP_KESEDIAAN;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        DATA DETAIL BANGUNAN
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->DATA_BANGUNAN;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        DATA DETAIL PERALATAN
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->DATA_PERALATAN;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        SURAT REKOMENDASI DINKES
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->SR_DINKES;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        NIB
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->NIB;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>


                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        IMB
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->IMB;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class="col-md-6">
                                                        UKL UPL
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
                                                        echo "
								                    <a href='";
                                                        echo base_url('./assets/documents/');
                                                        echo $b->UKL_UPL;
                                                        echo "' target='_blank'>Terlmapir </a>";
                                                        ?>
                                                    </div>
                                                </div>

                                            </H5>









                                    <?php endforeach;
                                    } ?>

                                </div>










                        </div>
                                    
                        <div class="col-md-12" align=center>
                            <?php 
                                if ($a->STATUS=="UPL"){ 
                            ?>
                                        <a data-target="#myModal" class='btn btn-info' data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#myModal">Submit</a>
                            <?php   }else{
                                ?> 
                                    <button type="sumbit" class="btn btn-info">Edit</button>
                                <?php
                            } 
                            ?>  
                          
                              
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
                                                 <br> KLIK VERIF APABILA SUDAH YAKIN!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">VERIF</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                    
                    </form>
                </div>
            </div>
        </div>
    </div>