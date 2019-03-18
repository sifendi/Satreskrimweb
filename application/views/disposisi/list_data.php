<?php
//print_r($dataLaporan);exit;
$no = 1;
foreach ($dataDisposisi as $laporanpolisi) {
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $laporanpolisi->nomor_polisi; ?></td>
        <td><?php echo $laporanpolisi->nama; ?></td>
        <td><?php echo $laporanpolisi->umur; ?></td>
        <td><?php echo $laporanpolisi->alamat; ?></td>

        <td class="text-center" style="min-width:230px;">
            <?php if ($laporanpolisi->id_penyidik == null) { ?>
                <button class="btn btn-warning btn-xs update-dataDisposisi" data-id="<?php echo $laporanpolisi->id_lp; ?>"><i class="glyphicon glyphicon-check"></i> Disposisi</button>
                <?php } else { ?>
                    <button class="btn btn-success btn-xs " disabled><i class="glyphicon glyphicon-signal"></i> Selesai</button>
                    <?php } ?> 
                    </td>
                    </tr>
                    <?php
                    $no++;
                }
                ?>