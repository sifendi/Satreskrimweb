<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Tambah Data Laporan</h3>

    <form id="form-tambah-laporan" method="POST">
        <div class="b4">
            <div class="b4">
                <div class="form-group ket">
                    <label for="recipient-name" class="control-label">Nomor Lp :</label>
                    <textarea maxlength="400" placeholder="Nomor Laporan Polisi"  class="form-control" id="nomor_polisi" name="nomor_polisi" rows="3"></textarea>
                </div>
            </div>
            <div class="b4">
                <div class="form-group ket">
                    <label for="recipient-name" class="control-label">Nama :</label>
                    <input style="width:100%" type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
            <div class="row" class="modal_font">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Tempat Lahir:</label>
                        <input style="width:95%" type="text" class="form-control" id="umur" name="umur">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Tanggal Lahir:</label>
                        <input style="width:95%" type="date" class="form-control" id="ttl" name="ttl">
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
                        <input style="width:95%" type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                    </div>
                </div>
            </div>


            <div class="b4">
                <div class="form-group ket">
                    <label for="recipient-name" class="control-label">Alamat :</label>
                    <textarea maxlength="400" placeholder="Alamat"  class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                </div>
            </div>
            <div class="row" class="modal_font">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">No HP:</label>
                        <input style="width:95%" type="text" class="form-control" id="nomor_hp" name="nomor_hp">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Email:</label>
                        <input style="width:95%" type="text" class="form-control" id="email" name="email">
                    </div>
                </div>
            </div>



            <div class="b4">
                <div class="form-group ket">
                    <label for="recipient-name" class="control-label">Waktu Kejadian :</label>
                    <textarea placeholder="Waktu Kejadian"  class="form-control" id="waktu_kejadian" name="waktu_kejadian" rows="3"></textarea>
                </div>
            </div>
            <div class="b4">
                <div class="form-group ket">
                    <label for="recipient-name" class="control-label">Tempat Kejadian :</label>
                    <textarea maxlength="400" placeholder="Tempat Kejadian"  class="form-control" id="tempat_kejadian" name="tempat_kejadian" rows="3"></textarea>
                </div>
            </div>


            <div class="row" class="modal_font">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Terjadi:</label>
                        <input style="width:95%" type="text" class="form-control" id="terjadi" name="terjadi">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Terlapor:</label>
                        <input style="width:95%" type="text" class="form-control" id="terlapor" name="terlapor">
                    </div>
                </div>
            </div>


            <div class="row" class="modal_font">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Korban:</label>
                        <input style="width:95%" type="text" class="form-control" id="korban" name="korban">
                    </div>
                </div>
            </div>

            <div class="b4">
                <div class="form-group ket">
                    <label for="recipient-name" class="control-label">Bagaimana Kejadiannya :</label>
                    <textarea maxlength="400" placeholder="Bagaimana Kejadiannya"  class="form-control" id="how" name="how" rows="3"></textarea>
                </div>
            </div>


            <div class="row" class="modal_font">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Dilaporkan Pada:</label>
                        <input style="width:95%" type="text" class="form-control" id="dilaporkan_pada" name="dilaporkan_pada">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Pasal:</label>
                        <input style="width:95%" type="text" class="form-control" id="pasal" name="pasal">
                    </div>
                </div>
            </div>

            <div class="b4">
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Pelanggaran / Tindak Pindana:</label>
                    <textarea maxlength="400" placeholder="Pelanggaran"  class="form-control" id="pelanggaran" name="pelanggaran"></textarea>
                </div>
            </div>

            <div class="row" class="modal_font">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Mengetahui:</label>
                        <input style="width:95%" type="text" class="form-control" id="mengetahui" name="mengetahui">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">NRP Mengetahui:</label>
                        <input style="width:95%" type="text" class="form-control" id="nrp_mengetahui" name="nrp_mengetahui">
                    </div>
                </div>
            </div>

            <div class="row" class="modal_font">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Menerima Laporan:</label>
                        <input style="width:95%" type="text" class="form-control" id="menerima_laporan" name="menerima_laporan">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">NRP Penerima:</label>
                        <input style="width:95%" type="text" class="form-control" id="nrp_menerima_laporan" name="nrp_menerima_laporan">
                    </div>
                </div>
            </div>
        </div>



        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
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