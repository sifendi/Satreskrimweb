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
                    <th>Unit</th>
                    <th>Penyidik</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody id="data-unggah">

            </tbody>
        </table>
    </div>
</div>



<div id="dataModal" class="modal fade">  
    <div class="modal-dialog">  
        <div class="modal-content">  
            <div class="modal-header">  
                <button type="button" class="close" data-dismiss="modal">&times;</button>  
                <h4 class="modal-title">List Berkas</h4>  
            </div>  
            <div class="modal-body" id="employee_detail">  
            </div>  
            <div class="modal-footer">  
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
            </div>  
        </div>  
    </div>  
</div>  


<div id="tempat-modal"></div>



