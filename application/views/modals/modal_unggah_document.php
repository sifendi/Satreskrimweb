<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Unggah Document</h3>
    <br/>
    <br/>

    <form class="form-horizontal" id="submit">
        <input type="hidden" name="id_disposisi" value="<?php echo $dataUnggah->id_disposisi; ?>">
        <div class="input-group form-group">
            <label> Nama Dokumen :    </label>
            <input type="text" name="judul" class="form-control" placeholder="Nama Dokumen">
        </div>
        <div class="input-group form-group">
            <label> File / Berkas :    </label>
            <input type="file" name="file" class="form-control">
        </div>
        <div class="input-group form-group">
            <label> Catatan :    </label>
            <input type="text" class="form-control" placeholder="Catatan " name="catatan" aria-describedby="sizing-addon2" >
        </div>

        <div class="form-group">
            <button class="btn btn-success" id="btn_upload" type="submit">Upload</button>
        </div>
    </form>
</div>

<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('#submit').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?php echo base_url(); ?>index.php/upload/do_upload',
                type: "post",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(data) {
                    alert("Upload Berkas Berhasil.");
                     window.location = 'http://localhost/sp2hp_new/Unggah';
                }
            });
        });


    });

</script>

