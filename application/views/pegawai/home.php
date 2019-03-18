<div class="msg" style="display:none;">
    <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
    <div class="box-header">
        <?php if ($userdata->id_level == 2000) { ?>
            <div class="col-md-6" style="padding: 0;">
                <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-penyidik"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
            </div>
            <div class="col-md-3">
                <a href="<?php echo base_url('Penyidik/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
            </div>
        <?php } ?>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table id="list-data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>No Telp</th>
                    <th>Unit</th>
                    <th>Jabatan</th>
                    <?php if ($userdata->id_level == 2000) { ?>
                        <th style="text-align: center;">Aksi</th>
                    <?php } ?>
                    </tr>
                </thead>
                <tbody id="data-pegawai">

                </tbody>
            </table>
        </div>
    </div>

    <?php echo $modal_tambah_penyidik; ?>

    <div id="tempat-modal"></div>

    <?php show_my_confirm('konfirmasiHapus', 'hapus-dataPegawai', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
    <?php
    $data['judul'] = 'Pegawai';
    $data['url'] = 'Pegawai/import';
    echo show_my_modal('modals/modal_import', 'import-pegawai', $data);
    ?>