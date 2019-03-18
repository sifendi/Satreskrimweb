<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Update Data Laporan Polisi</h3>

    <form method="POST" id="form-update-laporan">
        <input type="hidden" name="id_lp" value="<?php echo $dataLaporan->id_lp; ?>">

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->nama; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Nomor Polisi" name="nomor_polisi" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->nomor_polisi; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="Umur" name="umur" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->umur; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="date" class="form-control" placeholder="Tanggal Lahir" name="ttl" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->ttl; ?>">
        </div>


        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-briefcase"></i>
            </span>
            <select name="jenis_kelamin" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
                <option value="1">Laki - Laki</option>
                <option value="2">Perempuan</option>
            </select>
        </div>


        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->pekerjaan; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->alamat; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Nomor Handphone" name="nomor_hp" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->nomor_hp; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Email" name="email" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->email; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Waktu Kejadian" name="waktu_kejadian" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->waktu_kejadian; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Tempat Kejadian" name="tempat_kejadian" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->tempat_kejadian; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Terjadi" name="terjadi" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->terjadi; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Terlapor" name="terlapor" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->terlapor; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Korban" name="korban" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->korban; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Kejadian" name="how" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->how; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Dilaporkan " name="dilaporkan_pada" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->dilaporkan_pada; ?>">
        </div>




        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Pasal" name="pasal" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->pasal; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Pelanggaran" name="pelanggaran" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->pelanggaran; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Menerima Laporan" name="menerima_laporan" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->menerima_laporan; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="NRP" name="nrp_menerima_laporan" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->nrp_menerima_laporan; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="Mengetahui" name="mengetahui" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->mengetahui; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-phone-alt"></i>
            </span>
            <input type="text" class="form-control" placeholder="NRP Mengetahui" name="nrp_mengetahui" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->nrp_mengetahui; ?>">
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