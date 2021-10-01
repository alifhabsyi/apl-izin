<?php
// var_dump($list);
header("Content-type: application/vnd-ms-excel");
$tahun=$this->input->get('t');
$bulan=$this->input->get('b');
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data-SK-Tolak-$tahun$bulan.xls");
?>
<b>
    <h2>List Berkas SK Tolak Perizinan</h2>
</b>
<table border="2">
    <thead>
        
        <tr>
            <th>ID Registrasi</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kelurahan</th>
            <th>Kecamatan</th>
            <th>Kota</th>
            <th>Provinsi </th>
            <th>Tanggal Registrasi</th>
            <th>PIC</th>
            <th>NO Telpon</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($list as $a) :
            $id_reg = $a->ID_REG;
            $NAMA = $a->NAMA;
            $ALAMAT = $a->ALAMAT;
            $KELURAHAN = $a->KELURAHAN;
            $KECAMATAN = $a->KECAMATAN;
            $KOTA = $a->KOTA;
            $PROVINSI = $a->PROVINSI;
            $TGL_REG = $a->TGL_REG;
            $PENANGGUNG_JAWAB = $a->PENANGGUNG_JAWAB;
            $NO_TELP = $a->NO_TELP;
            $STATUS = $a->STATUS;
            echo "
                <tr>
                <td>
                    $id_reg
                </td>
                <td>
                    $NAMA
                </td>
                <td>
                    $ALAMAT
                </td>
                <td>
                    $KELURAHAN
                </td>
                <td>
                    $KECAMATAN
                </td>
                <td>
                    $KOTA
                </td>
                <td>
                    $PROVINSI
                </td>
                <td>
                    $TGL_REG
                </td>
                <td>
                    $PENANGGUNG_JAWAB
                </td>
                <td>
                    $NO_TELP
                </td>
                <td>
                    $STATUS
                </td>
                </tr>
                
            ";


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
        