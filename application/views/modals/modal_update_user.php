<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Update Data User</h3>

    <form id="form-update-user" method="POST">
        <input type="hidden" name="id" value="<?php echo $dataKota->id; ?>">
        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="Nama User" name="nama" aria-describedby="sizing-addon2" value="<?php echo $dataKota->nama; ?>">
        </div>
        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="Username" name="username" aria-describedby="sizing-addon2" value="<?php echo $dataKota->username; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-briefcase"></i>
            </span>
            <select name="id_level" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
                <option value="1000">Kapolres</option>
                <option value="2000">Admin (Operator)</option>
                <option value="3000">Kasat Reskrim</option>
                <option value="5000">Penyidik</option>
            </select>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
            </div>
        </div>
    </form>
</div>