<div class="msg" style="display:none;">
    <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
    <div class="box-header">
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
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody id="data-disposisi">

            </tbody>
        </table>
    </div>
</div>


<div id="tempat-modal"></div>
