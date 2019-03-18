
<?php
foreach ($dataPegawai as $pegawai) {
    ?>
    <tr>
        <td style="min-width:120px;"><?php echo $pegawai->nama; ?></td>
        <td><?php echo $pegawai->number_handphone;?></td>
        <td><?php
            if ($pegawai->unit == 1) {
                echo 'PIDUM';
            } elseif ($pegawai->unit == 2) {
                echo 'PIDEK';
            } elseif ($pegawai->unit == 3) {
                echo 'PIDKOR';
            } elseif ($pegawai->unit == 4) {
                echo 'PIDTER';
            } elseif ($pegawai->unit == 5) {
                echo 'PPA';
            }
            ?>
        </td>
        <td><?php
            if ($pegawai->sebagai == 1) {
                echo 'Penyidik';
            } elseif ($pegawai->sebagai == 2) {
                echo 'Operator (MinOps)';
            } elseif ($pegawai->sebagai == 3) {
                echo 'Kasat';
            }
            ?>
        </td>
        
        <?php if ($userdata->id_level == 2000) { ?>
            <td class="text-center" style="min-width:230px;">
                <button class="btn btn-warning update-dataPegawai" data-id="<?php echo $pegawai->no; ?>"><i class="glyphicon glyphicon-repeat"></i> Update </button>
                <button class="btn btn-danger konfirmasiHapus-pegawai" data-id="<?php echo $pegawai->no; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
            </td>
        <?php } ?>

    </tr>
    <?php
}
?>