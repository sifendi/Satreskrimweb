<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Update Data Penyidik</h3>

    <form method="POST" id="form-update-pegawai">
        <input type="hidden" name="no" value="<?php echo $dataPegawai->no; ?>">
        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->nama; ?>">
        </div>
        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Nomor Telepon" name="number_handphone" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->number_handphone; ?>">
        </div>
<!--        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Email" name="email" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->email; ?>">
        </div>-->


        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-briefcase"></i>
            </span>
            <select name="unit" class="form-control select2"  aria-describedby="sizing-addon2">
                <?php
                foreach ($dataPosisi as $posisi) {
                    ?>
                    <option value="<?php echo $posisi->id; ?>" <?php
                    if ($posisi->id == $dataPegawai->unit) {
                        echo "selected='selected'";
                    }
                    ?>><?php echo $posisi->nama; ?></option>
                            <?php
                        }
                        ?>
            </select>
        </div>


        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-briefcase"></i>
            </span>
            <select name="sebagai" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
                <option value="1">Penyidik</option>
                <option value="2">Operator (MinOps)</option>
                <option value="3">Kasat</option>
            </select>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(function() {
        $(".select2").select2();

        // $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        //   checkboxClass: 'icheckbox_flat-blue',
        //   radioClass: 'iradio_flat-blue'
        // });
    });
</script>