<?php
// var_dump($list);
header("Content-type: application/vnd-ms-excel");
$tahun = $this->input->get('t');
$bulan = $this->input->get('b');
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data-ST-$tahun$bulan.xls");
?>
<b>
    <h2>List Berkas Surat Tugas Perizinan</h2>
</b>
<table border="2">
    <thead>

        <tr>
            <th>ID REG</th>
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
        
</table>
<br><br>
                        <b>
                            Mengetahui, <br>
                            Kepala Dinas
                            <br><br><br><br>

                            Ir. MURAYATNA, MT<br>
                            NIP. 19620709 199003 1 008 
                        </b>
        