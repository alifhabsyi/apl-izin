<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
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
                                        <th>JENIS</th>
                                        <th>NAMA</th>
                                        <th>ALAMAT</th>
                                        <th>PIC</th>
                                        <th>STATUS</th>
                                        <th class="disabled-sorting text-right">Actions</th>
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
                                            <td><?php echo $a->NAMA ?></td>
                                            <td><?php echo $a->ALAMAT ?></td>
                                            <td><?php echo $a->PENANGGUNG_JAWAB ?></td>
                                            <td><?php echo $a->STATUS ?></td>
                                            <td class="text-right">
                                                <a href="<?php echo base_url()?>admin/approvebap?n=<?php echo $a->ID_REG?>" class="btn btn-link btn-warning edit"><i class="fa fa-edit"></i></a>
                                                
                                                <?php 
                                                   
                                                    if((($a->STATUS=="STBAP") || ($a->STATUS=="SK") || ($a->STATUS=="SKK")) && ($a->JENIS=="lab")){?>
                                                        <a href="<?php echo base_url()?>admin/pstlab?n=<?php echo $a->ID_REG?>" class="btn btn-link btn-warning edit"><i class="fa fa-print"></i></a>
                                                       
                                                       <?php
                                                        
                                                    }else if((($a->STATUS=="STBAP") || ($a->STATUS=="SK") || ($a->STATUS=="SKK"))&& ($a->JENIS=="pend")){?>
                                                        <a href="<?php echo base_url()?>admin/pstpend?n=<?php echo $a->ID_REG?>" class="btn btn-link btn-warning edit"><i class="fa fa-print"></i></a>
                                                    <?php
                                                    }else if((($a->STATUS=="STBAP") || ($a->STATUS=="SK")|| ($a->STATUS=="SK")) && ($a->JENIS=="kons")){?>
                                                        <a href="<?php echo base_url()?>admin/pstkons?n=<?php echo $a->ID_REG?>" class="btn btn-link btn-warning edit"><i class="fa fa-print"></i></a>
                                                    <?php
                                                    }
                                                ?>
                                            </td>
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