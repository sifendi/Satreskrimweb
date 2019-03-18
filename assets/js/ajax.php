<script type="text/javascript">
    var MyTable = $('#list-data').dataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false
    });

    window.onload = function() {
        tampilPenyidik();
        tampilPosisi();
        tampilKota();
        tampilLaporan();
        tampildisposisi();
        tampilUnggah();
<?php
if ($this->session->flashdata('msg') != '') {
    echo "effect_msg();";
}
?>
    }

    function refresh() {
        MyTable = $('#list-data').dataTable();
    }

    function effect_msg_form() {
        $('.form-msg').show(1000);
        setTimeout(function() {
            $('.form-msg').fadeOut(1000);
        }, 3000);
    }

    function effect_msg() {
        $('.msg').show(1000);
        setTimeout(function() {
            $('.msg').fadeOut(1000);
        }, 3000);
    }

    function tampilPenyidik() {
        $.get('<?php echo base_url('Penyidik/tampil'); ?>', function(data) {
            MyTable.fnDestroy();
            $('#data-pegawai').html(data);
            refresh();
        });
    }

    var id_pegawai;
    $(document).on("click", ".konfirmasiHapus-pegawai", function() {
        id_pegawai = $(this).attr("data-id");
    })

    $(document).on("click", ".hapus-dataPegawai", function() {
        var id = id_pegawai;

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Penyidik/delete'); ?>",
            data: "id=" + id
        }).done(function(data) {
            $('#konfirmasiHapus').modal('hide');
            tampilPenyidik();
            $('.msg').html(data);
            effect_msg();
        })
    })

    $(document).on("click", ".update-dataPegawai", function() {
        var id = $(this).attr("data-id");
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Penyidik/update'); ?>",
            data: "id=" + id
        })
                .done(function(data) {
            $('#tempat-modal').html(data);
            $('#update-pegawai').modal('show');
        })
    })

    $('#form-tambah-penyidik').submit(function(e) {
        var data = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('Penyidik/prosesTambah'); ?>',
            data: data
        }).done(function(data) {
            var out = jQuery.parseJSON(data);
            tampilPenyidik();
            if (out.status == 'form') {
                $('.form-msg').html(out.msg);
                effect_msg_form();
            } else {
                document.getElementById("form-tambah-penyidik").reset();
                $('#tambah-penyidik').modal('hide');
                $('.msg').html(out.msg);
                effect_msg();
            }
        })

        e.preventDefault();
    });

    $(document).on('submit', '#form-update-pegawai', function(e) {
        var data = $(this).serialize();
        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('Penyidik/prosesUpdate'); ?>',
            data: data
        })
                .done(function(data) {
            var out = jQuery.parseJSON(data);

            tampilPenyidik();
            if (out.status == 'form') {
                $('.form-msg').html(out.msg);
                effect_msg_form();
            } else {
                document.getElementById("form-update-pegawai").reset();
                $('#update-pegawai').modal('hide');
                $('.msg').html(out.msg);
                effect_msg();
            }
        })

        e.preventDefault();
    });

    $('#tambah-pegawai').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    })

    $('#update-pegawai').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    })



    //////////////////////////**************************///////////////////////////////////////
    /////////////////////////Ajax code for fitur USER////////////////////////////////////////////
    //////////////////////////**************************///////////////////////////////////////
    function tampilKota() {
        $.get('<?php echo base_url('User/tampil'); ?>', function(data) {
            MyTable.fnDestroy();
            $('#data-kota').html(data);
            refresh();
        });
    }

    var id_kota;
    $(document).on("click", ".konfirmasiHapus-kota", function() {
        id_kota = $(this).attr("data-id");
    })

    $(document).on("click", ".hapus-dataKota", function() {
        var id = id_kota;

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('User/delete'); ?>",
            data: "id=" + id
        })
                .done(function(data) {
            $('#konfirmasiHapus').modal('hide');
            tampilKota();
            $('.msg').html(data);
            effect_msg();
        })
    })

    $(document).on("click", ".update-dataKota", function() {
        var id = $(this).attr("data-id");
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('User/update'); ?>",
            data: "id=" + id
        })
                .done(function(data) {
            $('#tempat-modal').html(data);
            $('#update-user').modal('show');
        })
    })

    $('#form-tambah-user').submit(function(e) {
        var data = $(this).serialize();
        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('User/prosesTambah'); ?>',
            data: data
        }).done(function(data) {
            var out = jQuery.parseJSON(data);
            tampilKota();
            if (out.status == 'form') {
                $('.form-msg').html(out.msg);
                effect_msg_form();
            } else {
                document.getElementById("form-tambah-user").reset();
                $('#tambah-user').modal('hide');
                $('.msg').html(out.msg);
                effect_msg();
            }
        })
        e.preventDefault();
    });

    $(document).on('submit', '#form-update-user', function(e) {
        var data = $(this).serialize();
        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('User/prosesUpdate'); ?>',
            data: data
        }).done(function(data) {
            var out = jQuery.parseJSON(data);

            tampilKota();
            if (out.status == 'form') {
                $('.form-msg').html(out.msg);
                effect_msg_form();
            } else {
                document.getElementById("form-update-user").reset();
                $('#update-user').modal('hide');
                $('.msg').html(out.msg);
                effect_msg();
            }
        })
        e.preventDefault();
    });

    $('#tambah-kota').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    })

    $('#update-user').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    })





    //////////////////////////**************************///////////////////////////////////////
    /////////////////////////Ajax code for fitur Posisi////////////////////////////////////////////
    //////////////////////////**************************///////////////////////////////////////
    function tampilPosisi() {
        $.get('<?php echo base_url('Posisi/tampil'); ?>', function(data) {
            MyTable.fnDestroy();
            $('#data-posisi').html(data);
            refresh();
        });
    }

    var id_posisi;
    $(document).on("click", ".konfirmasiHapus-posisi", function() {
        id_posisi = $(this).attr("data-id");
    })

    $(document).on("click", ".hapus-dataPosisi", function() {
        var id = id_posisi;

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Posisi/delete'); ?>",
            data: "id=" + id
        })
                .done(function(data) {
            $('#konfirmasiHapus').modal('hide');
            tampilPosisi();
            $('.msg').html(data);
            effect_msg();
        })
    })

    $(document).on("click", ".update-dataPosisi", function() {
        var id = $(this).attr("data-id");

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Posisi/update'); ?>",
            data: "id=" + id
        })
                .done(function(data) {
            $('#tempat-modal').html(data);
            $('#update-posisi').modal('show');
        })
    })

    $(document).on("click", ".detail-dataPosisi", function() {
        var id = $(this).attr("data-id");

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Posisi/detail'); ?>",
            data: "id=" + id
        })
                .done(function(data) {
            $('#tempat-modal').html(data);
            $('#tabel-detail').dataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
            $('#detail-posisi').modal('show');
        })
    })

    $('#form-tambah-posisi').submit(function(e) {
        var data = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('Posisi/prosesTambah'); ?>',
            data: data
        })
                .done(function(data) {
            var out = jQuery.parseJSON(data);

            tampilPosisi();
            if (out.status == 'form') {
                $('.form-msg').html(out.msg);
                effect_msg_form();
            } else {
                document.getElementById("form-tambah-posisi").reset();
                $('#tambah-posisi').modal('hide');
                $('.msg').html(out.msg);
                effect_msg();
            }
        })

        e.preventDefault();
    });

    $(document).on('submit', '#form-update-posisi', function(e) {
        var data = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('Posisi/prosesUpdate'); ?>',
            data: data
        })
                .done(function(data) {
            var out = jQuery.parseJSON(data);

            tampilPosisi();
            if (out.status == 'form') {
                $('.form-msg').html(out.msg);
                effect_msg_form();
            } else {
                document.getElementById("form-update-posisi").reset();
                $('#update-posisi').modal('hide');
                $('.msg').html(out.msg);
                effect_msg();
            }
        })

        e.preventDefault();
    });

    $('#tambah-posisi').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    })

    $('#update-posisi').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    })














    //////////////////////////**************************///////////////////////////////////////
    /////////////////////////Ajax code for fitur laporan polisi////////////////////////////////////////////
    //////////////////////////**************************///////////////////////////////////////
    function tampilLaporan() {
        $.get('<?php echo base_url('Laporan_polisi/tampil'); ?>', function(data) {
            MyTable.fnDestroy();
            $('#data-laporan').html(data);
            refresh();
        });
    }

    var id_lp;
    $(document).on("click", ".konfirmasiHapus-laporan", function() {
        id_lp = $(this).attr("data-id");
    })

    $(document).on("click", ".hapus-dataLaporan", function() {
        var id = id_lp;
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Laporan_polisi/delete'); ?>",
            data: "id=" + id
        })
                .done(function(data) {
            $('#konfirmasiHapus').modal('hide');
            tampilLaporan();
            $('.msg').html(data);
            effect_msg();
        })
    })

    $(document).on("click", ".update-dataLaporan", function() {
        var id = $(this).attr("data-id");
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Laporan_polisi/update'); ?>",
            data: "id=" + id
        })
                .done(function(data) {
            $('#tempat-modal').html(data);
            $('#update-laporan').modal('show');
        })
    })

    $('#form-tambah-laporan').submit(function(e) {
        var data = $(this).serialize();
        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('Laporan_polisi/prosesTambah'); ?>',
            data: data
        }).done(function(data) {
            var out = jQuery.parseJSON(data);
            tampilKota();
            if (out.status == 'form') {
                $('.form-msg').html(out.msg);
                effect_msg_form();
            } else {
                document.getElementById("form-tambah-laporan").reset();
                $('#tambah-laporan').modal('hide');
                $('.msg').html(out.msg);
                effect_msg();
            }
        })
        e.preventDefault();
    });

    $(document).on('submit', '#form-update-laporan', function(e) {
        var data = $(this).serialize();
        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('Laporan_polisi/prosesUpdate'); ?>',
            data: data
        }).done(function(data) {
            var out = jQuery.parseJSON(data);
            tampilLaporan();
            if (out.status == 'form') {
                $('.form-msg').html(out.msg);
                effect_msg_form();
            } else {
                document.getElementById("form-update-laporan").reset();
                $('#update-laporan').modal('hide');
                $('.msg').html(out.msg);
                effect_msg();
            }
        })
        e.preventDefault();
    });

    $('#tambah-laporan').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    })

    $('#update-laporan').on('hidden.bs.modal', function() {
        $('.form-msg').html('');
    })

    $(document).on("click", ".detail-dataLaporan", function() {
        var id = $(this).attr("data-id");
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Laporan_polisi/detail'); ?>",
            data: "id=" + id
        })
                .done(function(data) {
            $('#tempat-modal').html(data);
            $('#detail-laporan').modal('show');
        })
    })


    //////////////////////////**************************///////////////////////////////////////
    /////////////////////////Ajax code for fitur Disposisi////////////////////////////////////////////
    //////////////////////////**************************///////////////////////////////////////
    function tampildisposisi() {
        $.get('<?php echo base_url('Disposisi/tampil'); ?>', function(data) {
            MyTable.fnDestroy();
            $('#data-disposisi').html(data);
            refresh();
        });
    }

    $(document).on("click", ".update-dataDisposisi", function() {
        var id = $(this).attr("data-id");
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Disposisi/update'); ?>",
            data: "id=" + id
        })
                .done(function(data) {
            $('#tempat-modal').html(data);
            $('#update-disposisi').modal('show');
        })
    })

    $(document).on('submit', '#form-update-disposisi', function(e) {
        var data = $(this).serialize();
        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('Disposisi/prosesUpdate'); ?>',
            data: data
        }).done(function(data) {
            var out = jQuery.parseJSON(data);
//            alert(out);
            tampildisposisi();
            if (out.status == 'form') {
                $('.form-msg').html(out.msg);
                effect_msg_form();
            } else {
                document.getElementById("form-update-disposisi").reset();
                $('#update-disposisi').modal('hide');
                $('.msg').html(out.msg);
                effect_msg();
            }
        })
        e.preventDefault();
    });


    //////////////////////////**************************///////////////////////////////////////
    /////////////////////////Ajax code for fitur Unggah////////////////////////////////////////////
    //////////////////////////**************************///////////////////////////////////////
    function tampilUnggah() {
        $.get('<?php echo base_url('Unggah/tampil'); ?>', function(data) {
            MyTable.fnDestroy();
            $('#data-unggah').html(data);
            refresh();
        });
    }

    $(document).on("click", ".update-dataUnggah", function() {
        var id = $(this).attr("data-id");
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Unggah/update'); ?>",
            data: "id=" + id
        })
                .done(function(data) {
            $('#tempat-modal').html(data);
            $('#update-unggah').modal('show');
        })
    })

    $(document).on('submit', '#form-unggah-document', function(e) {
        var data = $(this).serialize();
        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('Upload/aksi_upload'); ?>',
            data: data
        }).done(function(data) {
            var out = jQuery.parseJSON(data);
            tampilUnggah();
            if (out.status == 'form') {
                $('.form-msg').html(out.msg);
                effect_msg_form();
            } else {
                document.getElementById("form-unggah-document").reset();
                $('#update-unggah').modal('hide');
                $('.msg').html(out.msg);
                effect_msg();
            }
        })
        e.preventDefault();
    });


</script>