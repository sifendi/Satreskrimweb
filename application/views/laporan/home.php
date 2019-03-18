<div class="msg" style="display:none;">
    <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
    <div class="box-header">
        <?php if ($userdata->id_level == 2000) { ?>
            <div class="col-md-6" style="padding: 0;">
                <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-laporan"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
            </div>
            <div class="col-md-3">
                <!--<a href="<?php echo base_url('Laporan_polisi/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>-->
            </div>
        <?php } ?>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table id="list-data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Polisi</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <?php if ($userdata->id_level == 2000 || $userdata->id_level == 3000) { ?>
                        <th style="text-align: center;">Aksi</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody id="data-laporan">

            </tbody>
        </table>
    </div>
</div>

<?php echo $modal_tambah_laporan; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataLaporan', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
