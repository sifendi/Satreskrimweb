<?php
//print_r($dataLaporan);exit;
$no = 1;
foreach ($dataUnggah as $laporanpolisi) {
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $laporanpolisi->nomor_polisi; ?></td>
        <td><?php echo $laporanpolisi->pelapor; ?></td>
        <td><?php
            if ($laporanpolisi->kasat == 1) {
                echo 'PIDUM';
            } elseif ($laporanpolisi->kasat == 2) {
                echo 'PIDEK';
            } elseif ($laporanpolisi->kasat == 3) {
                echo 'PIDKOR';
            } elseif ($laporanpolisi->kasat == 4) {
                echo 'PIDTER';
            } elseif ($laporanpolisi->kasat == 5) {
                echo 'PPA';
            }
            ?>
        </td>        
        <td><?php echo $laporanpolisi->penyidik; ?></td>
        <td class="text-center" style="min-width:230px;">
            <button class="btn btn-success btn-xs update-dataUnggah" data-id="<?php echo $laporanpolisi->id_lp; ?>"><i class="glyphicon glyphicon-check"></i> Unggah</button>
            <input type="button" name="view" value="view" id="<?php echo $laporanpolisi->disposisi; ?>" class="btn btn-info btn-xs view_data" />
        </td>
    </tr>
    <?php
    $no++;
}
?>

<script>
    $(document).ready(function() {
        $('.view_data').click(function() {
            var employee_id = $(this).attr("id");
            $.ajax({
                url: "http://localhost/sp2hp_new/upload/modal",
                method: "post",
                data: {employee_id: employee_id},
                success: function(data) {
                    $('#employee_detail').html(data);
                    $('#dataModal').modal("show");
                }
            });
        });
    });
</script>