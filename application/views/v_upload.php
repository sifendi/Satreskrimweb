<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <title>Upload Berkas SP2HP</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
    </head>
    <body>
        <div class="container">
            <div class="col-sm-4 col-md-offset-4">
                <h4>Upload Berkas SP2HP</h4>
                <form class="form-horizontal" id="submit">
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
                            alert("Upload Image Berhasil.");
                        }
                    });
                });


            });

        </script>
    </body>
</html>