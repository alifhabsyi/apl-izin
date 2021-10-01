<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form class='form-horizontal' id='submit' action="<?php echo base_url() ?>admin/lstbap" method='post' enctype='multipart/form-data'>

                    <div class="row">

                        <div class="col-md-3">
                            <select class="form-control" name="bulan" id="bulan">
                                <?php
                                if ($this->input->post("bulan")) {
                                    $bulan = $this->input->post("bulan");

                                    if ($this->input->post("bulan") == 1) {
                                        echo "<option value=$bulan>Januari</option>";
                                    } else if ($this->input->post("bulan") == 2) {
                                        echo "<option value=$bulan>Februari</option>";
                                    } else if ($this->input->post("bulan") == 3) {
                                        echo "<option value=$bulan>Maret</option>";
                                    } else if ($this->input->post("bulan") == 4) {
                                        echo "<option value=$bulan>April</option>";
                                    } else if ($this->input->post("bulan") == 5) {
                                        echo "<option value=$bulan>Mei</option>";
                                    } else if ($this->input->post("bulan") == 6) {
                                        echo "<option value=$bulan>Juni</option>";
                                    } else if ($this->input->post("bulan") == 7) {
                                        echo "<option value=$bulan>Juli</option>";
                                    } else if ($this->input->post("bulan") == 8) {
                                        echo "<option value=$bulan>Agustus</option>";
                                    } else if ($this->input->post("bulan") == 9) {
                                        echo "<option value=$bulan>September</option>";
                                    } else if ($this->input->post("bulan") == 10) {
                                        echo "<option value=$bulan>Oktober</option>";
                                    } else if ($this->input->post("bulan") == 11) {
                                        echo "<option value=$bulan>November</option>";
                                    } else if ($this->input->post("bulan") == 12) {
                                        echo "<option value=$bulan>Desember</option>";
                                    }
                                }
                                if (!$this->input->post("bulan")) {

                                    $bulan = date('m');
                                    // var_dump($bulan);
                                    if ($bulan == 1) {
                                        echo "<option value=$bulan>Januari</option>";
                                    } else if ($bulan == 2) {
                                        echo "<option value=$bulan>Februari</option>";
                                    } else if ($bulan == 3) {
                                        echo "<option value=$bulan>Maret</option>";
                                    } else if ($bulan == 4) {
                                        echo "<option value=$bulan>April</option>";
                                    } else if ($bulan == 5) {
                                        echo "<option value=$bulan>Mei</option>";
                                    } else if ($bulan == 6) {
                                        echo "<option value=$bulan>Juni</option>";
                                    } else if ($bulan == 7) {
                                        echo "<option value=$bulan>Juli</option>";
                                    } else if ($bulan == 8) {
                                        echo "<option value=$bulan>Agustus</option>";
                                    } else if ($bulan == 9) {
                                        echo "<option value=$bulan>September</option>";
                                    } else if ($bulan == 10) {
                                        echo "<option value=$bulan>Oktober</option>";
                                    } else if ($bulan == 11) {
                                        echo "<option value=$bulan>November</option>";
                                    } else if ($bulan == 12) {
                                        echo "<option value=$bulan>Desember</option>";
                                    }
                                } ?>
                                <option value=1>Januari</option>
                                <option value=2>Februari</option>
                                <option value=3>Maret</option>
                                <option value=4>April</option>
                                <option value=5>Mei</option>
                                <option value=6>Juni</option>
                                <option value=7>Juli</option>
                                <option value=8>Agustus</option>
                                <option value=9>September</option>
                                <option value=10>Oktober</option>
                                <option value=11>November</option>
                                <option value=12>Desember</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" name="tahun" id="tahun">
                                <?php if ($this->input->post("tahun")) {
                                    $tahun = $this->input->post("tahun");
                                    echo "<option value='$tahun'>$tahun</option>";
                                }
                                if (!$this->input->post("tahun")) {

                                    $tahun = date('Y');
                                    echo "<option value='$tahun'>$tahun</option>";
                                } ?>
                                <option value=2019>2019</option>
                                <option value=2020>2020</option>
                                <option value=2021>2021</option>
                                <option value=2022>2022</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" name="jenis" id="jenis" required>
                                <?php if ($this->input->post("jenis")) {
                                    $jenis = $this->input->post("jenis");
                                    echo "<option value='$jenis'>$jenis</option>";
                                }
                                if (!$this->input->post("jenis")) {

                                    $jenis = '';
                                    echo "<option value='$jenis'>$jenis</option>";
                                } ?>
                                <option value=pend>Pendidikan</option>
                                <option value=lab>Laboratorium</option>
                                <option value=kons>Konstruksi</option>
                                
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-info">Cari</button>
                            <?php
                               if ($this->input->post("tahun")) {
                                $tahun=$this->input->post("tahun");
                                $bulan=$this->input->post("bulan");

                                   $url= base_url()."admin/export_lstbap?t=$tahun&b=$bulan";
                                   $burl= base_url()."admin/export_clstbap?t=$tahun&b=$bulan";
                               }
                               else if (!$this->input->post("tahun")) {
                                $tahun=date("Y");
                                $bulan=date("m");
                                   $url= base_url()."admin/export_lstbap?t=$tahun&b=$bulan";
                                   $burl= base_url()."admin/export_clstbap?t=$tahun&b=$bulan";
                               }
                            ?>
                            <a href="<?php echo $url?>" class="btn btn-info">Export Data</a>
                            <a href="<?php echo $burl?>" target="_blank" class="btn btn-info">Cetak Laporan</a>
                        </div>

                    </div>
                </form>
                <br>
                <div class="card data-tables">
                    <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="fresh-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
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
                                    <?php foreach ($list as $a) :
                                        
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
<script>
    function checkDelete() {
        return confirm('Yakin Ingin Reject data?');
    }
</script>