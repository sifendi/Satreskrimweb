<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Update Data Laporan</h3>

    <form id="form-update-laporan" method="POST">
        <input type="hidden" name="id_lp" value="<?php echo $dataLaporan->id_lp; ?>">
        <div class="b4">
            <div class="b4">
                <div class="form-group ket">
                    <label for="recipient-name" class="control-label">Nomor Lp :</label>
                    <input type="text" class="form-control" placeholder="Nomor Polisi" name="nomor_polisi" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->nomor_polisi; ?>">
                </div>
            </div>
            <div class="b4">
                <div class="form-group ket">
                    <label for="recipient-name" class="control-label">Nama :</label>
                    <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->nama; ?>">
                </div>
            </div>
            <div class="row" class="modal_font">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Tanggal Lahir:</label>
                        <input style="width:95%" type="date" class="form-control" id="ttl" name="ttl" value="<?php echo $dataLaporan->ttl; ?>">
                    </div>
                </div>
            </div>
            <div class="row" class="modal_font">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Jenis Kelamin:</label>
                        <select required  class="form-control" id="status" name="jenis_kelamin">
                            <option value='1'>Laki-Laki</option>
                            <option value='2'>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Pekerjaan:</label>
                        <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->pekerjaan; ?>">
                    </div>
                </div>
            </div>


            <div class="b4">
                <div class="form-group ket">
                    <label for="recipient-name" class="control-label">Alamat :</label>
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->alamat; ?>">
                </div>
            </div>
            <div class="row" class="modal_font">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">No HP:</label>
                        <input type="text" class="form-control" placeholder="Nomor Handphone" name="nomor_hp" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->nomor_hp; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Email:</label>
                        <input type="text" class="form-control" placeholder="Email" name="email" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->email; ?>">
                    </div>
                </div>
            </div>



            <div class="b4">
                <div class="form-group ket">
                    <label for="recipient-name" class="control-label">Waktu Kejadian :</label>
                    <!--<textarea placeholder="Waktu Kejadian"  class="form-control" id="waktu_kejadian" name="waktu_kejadian" rows="3"></textarea>-->
                    <input type="text" class="form-control" placeholder="Waktu Kejadian" name="waktu_kejadian" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->waktu_kejadian; ?>">
                </div>
            </div>
            <div class="b4">
                <div class="form-group ket">
                    <label for="recipient-name" class="control-label">Tempat Kejadian :</label>
                    <!--<textarea maxlength="400" placeholder="Tempat Kejadian"  class="form-control" id="tempat_kejadian" name="tempat_kejadian" rows="3"></textarea>-->
                    <input type="text" class="form-control" placeholder="Tempat Kejadian" name="tempat_kejadian" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->tempat_kejadian; ?>">
                </div>
            </div>


            <div class="row" class="modal_font">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Terjadi:</label>
                        <input type="text" class="form-control" placeholder="Terjadi" name="terjadi" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->terjadi; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Terlapor:</label>
                        <input type="text" class="form-control" placeholder="Terlapor" name="terlapor" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->terlapor; ?>">
                    </div>
                </div>
            </div>


            <div class="row" class="modal_font">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Korban:</label>
                        <input type="text" class="form-control" placeholder="Korban" name="korban" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->korban; ?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Umur:</label>
                        <input type="text" class="form-control" placeholder="Umur" name="umur" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->umur; ?>">
                    </div>
                </div>
            </div>

            <div class="b4">
                <div class="form-group ket">
                    <label for="recipient-name" class="control-label">Bagaimana Kejadiannya :</label>
                    <input type="text" class="form-control" placeholder="Kejadian" name="how" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->how; ?>">
                </div>
            </div>


            <div class="row" class="modal_font">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Dilaporkan Pada:</label>
                        <input type="text" class="form-control" placeholder="Dilaporkan " name="dilaporkan_pada" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->dilaporkan_pada; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Pasal:</label>
                        <input type="text" class="form-control" placeholder="Pasal" name="pasal" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->pasal; ?>">
                    </div>
                </div>
            </div>

            <div class="b4">
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Pelanggaran / Tindak Pindana:</label>
                    <input type="text" class="form-control" placeholder="Pelanggaran" name="pelanggaran" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->pelanggaran; ?>">
                </div>
            </div>

            <div class="row" class="modal_font">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Mengetahui:</label>
                        <input type="text" class="form-control" placeholder="Mengetahui" name="mengetahui" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->mengetahui; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">NRP Mengetahui:</label>
                        <input type="text" class="form-control" placeholder="NRP Mengetahui" name="nrp_mengetahui" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->nrp_mengetahui; ?>">
                    </div>
                </div>
            </div>

            <div class="row" class="modal_font">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Menerima Laporan:</label>
                        <input type="text" class="form-control" placeholder="Menerima Laporan" name="menerima_laporan" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->menerima_laporan; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">NRP Penerima:</label>
                        <input type="text" class="form-control" placeholder="NRP" name="nrp_menerima_laporan" aria-describedby="sizing-addon2" value="<?php echo $dataLaporan->nrp_menerima_laporan; ?>">
                    </div>
                </div>
            </div>
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
        // $(".select2").select2();

        // $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        //   checkboxClass: 'icheckbox_flat-blue',
        //   radioClass: 'iradio_flat-blue'
        // });
    });
</script>