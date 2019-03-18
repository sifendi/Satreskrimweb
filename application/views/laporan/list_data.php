<?php
//print_r($dataLaporan);exit;
$no = 1;
foreach ($dataLaporan as $laporanpolisi) {
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td style="min-width:90px;">
            <button class="btn btn-success btn-xs detail-dataLaporan" data-id="<?php echo $laporanpolisi->id_lp; ?>"><i class="glyphicon glyphicon-king"></i> <?php echo $laporanpolisi->nomor_polisi; ?> </button>
        </td>
        <td><?php echo $laporanpolisi->nama; ?></td>
        <td><?php echo $laporanpolisi->umur; ?></td>
        <td><?php echo $laporanpolisi->alamat; ?></td>

        <?php if ($userdata->id_level == 2000 || $userdata->id_level == 3000) { ?>
            <td class="text-center" style="min-width:150px;">
                <button class="btn btn-warning btn-xs update-dataLaporan" data-id="<?php echo $laporanpolisi->id_lp; ?>"><i class="glyphicon glyphicon-repeat"></i> Update </button>
                <button class="btn btn-danger btn-xs konfirmasiHapus-laporan" data-id="<?php echo $laporanpolisi->id_lp; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
            </td>
        <?php } ?>
    </tr>
    <?php
    $no++;
}
?>