<?php
$no = 1;
foreach ($dataKota as $user) {
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $user->nama; ?></td>
        <td><?php echo $user->username; ?></td>
        <td><?php
            if ($user->id_level == 1000) {
                echo 'Kapolres';
            } elseif ($user->id_level == 2000) {
                echo 'Admin (Operator)';
            } elseif ($user->id_level == 3000) {
                echo 'Kasat Reskrim';
            } elseif ($user->id_level == 5000) {
                echo 'Penyidik';
            }
            ?></td>
        <td><?php
            if ($user->delete_is == 0) {
                echo 'Aktif';
            } elseif ($user->delete_is == 1) {
                echo 'Non Aktif';
            }
            ?></td>
        <td class="text-center" style="min-width:230px;">
            <button class="btn btn-warning update-dataKota" data-id="<?php echo $user->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
            <button class="btn btn-danger konfirmasiHapus-kota" data-id="<?php echo $user->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        </td>
    </tr>
    <?php
    $no++;
}
?>