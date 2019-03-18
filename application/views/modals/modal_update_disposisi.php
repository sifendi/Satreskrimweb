<div class="modal-header">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Form Penugasan</h3>

    <div class="row">
        <form method="POST" id="form-update-disposisi">
            <input type="hidden" name="id_lp" value="<?php echo $dataLaporan->id_lp; ?>">

            <div class="col-md-6" style="padding-left: 50px">
                <div class="input-group form-group">
                    <label> Atensi :</label>
                    <input type="radio" name="atensi" value="1" />Yes
                    <input type="radio" name="atensi" value="2" />No
                </div>
                <div class="input-group form-group">
                    <label> Lidik :</label>
                    <input type="radio" name="lidik" value="1" />Yes
                    <input type="radio" name="lidik" value="2" />No
                </div>
                <div class="input-group form-group">
                    <label> Gelarkan :</label>
                    <input type="radio" name="gelarkan" value="1" />Yes
                    <input type="radio" name="gelarkan" value="2" />No
                </div>
                <div class="input-group form-group">
                    <label> Kirim SP2HP :</label>
                    <input type="radio" name="kirim" value="1" />Yes
                    <input type="radio" name="kirim" value="2" />No
                </div>
                <div class="input-group form-group">
                    <label> Tingkatkan Sidik :</label>
                    <input type="radio" name="tingkatkan" value="1" />Yes
                    <input type="radio" name="tingkatkan" value="2" />No
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group form-group">
                    <label> Tindak Lanjut :</label>
                    <input type="radio" name="lanjut" value="1" />Yes
                    <input type="radio" name="lanjut" value="2" />No
                </div>
                <div class="input-group form-group">
                    <label> Unit : </label>
                    <select name="kasat" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
                        <option value="1">PIDUM</option>
                        <option value="2">PIDEK</option>
                        <option value="3">PIDKOR</option>
                        <option value="4">PIDTER</option>
                        <option value="5">PPA</option>
                    </select>
                </div>

                <div class="input-group form-group">
                    <label> Penyidik : </label>
                    <select name="id_penyidik" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
                        <?php
                        foreach ($dataPegawai as $pegawai) {
                            ?>
                            <option value="<?php echo $pegawai->no; ?>">
                                <?php echo $pegawai->nama; ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-group form-group">
                    <label> Catatan : </label>
                    <textarea name="catatan" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Kirim</button>
                </div>
            </div>
        </form>
    </div>
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