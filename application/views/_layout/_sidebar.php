<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $userdata->nama; ?></p>
                <!-- Status -->
                <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->        
        <ul class="sidebar-menu">
            <!--MENU UNTUK PENYIDIK-->
            <?php if ($userdata->id_level == 5000) { ?>
                <li class="header">DASHBOARD</li>      
                <li <?php
                if ($page == 'home') {
                    echo 'class="active"';
                }
                ?>>
                    <a href="<?php echo base_url('Home'); ?>">
                        <i class="fa fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class = "header">DATA TRASAKSI</li>
                <li <?php
                if ($page == 'laporan') {
                    echo 'class="active"';
                }
                ?>>
                    <a href="<?php echo base_url('Laporan_polisi'); ?>">
                        <i class="fa fa-bookmark"></i>
                        <span>Laporan Polisi</span>
                    </a>
                </li>
                <li <?php
                if ($page == 'document') {
                    echo 'class="active"';
                }
                ?>>
                    <a href="<?php echo base_url('Unggah'); ?>">
                        <i class="fa fa-bookmark"></i>
                        <span>Unggah Doc</span>
                    </a>
                </li>
            <?php }
            ?>
            <!--BATAS MENU PENYIDIK-->

            <!--MENU UNTUK ADMIN-->
            <?php if ($userdata->id_level == 2000) { ?>
                <li class="header">DASHBOARD</li>      
                <li <?php
                if ($page == 'home') {
                    echo 'class="active"';
                }
                ?>>
                    <a href="<?php echo base_url('Home'); ?>">
                        <i class="fa fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="header">MASTER DATA</li>      
                <li <?php
                if ($page == 'penyidik') {
                    echo 'class="active"';
                }
                ?>>
                    <a href="<?php echo base_url('Penyidik'); ?>">
                        <i class="fa fa-user"></i>
                        <span>Data Anggota</span>
                    </a>
                </li>

                <li <?php
                if ($page == 'posisi') {
                    echo 'class="active"';
                }
                ?>>
                    <a href="<?php echo base_url('Posisi'); ?>">
                        <i class="fa fa-briefcase"></i>
                        <span>Data Unit</span>
                    </a>
                </li>

                <li <?php
                if ($page == 'user') {
                    echo 'class="active"';
                }
                ?>>
                    <a href="<?php echo base_url('User'); ?>">
                        <i class="fa fa-user-plus"></i>
                        <span>Data User</span>
                    </a>
                </li>


                <li class="header">DATA TRASAKSI</li>      
                <li <?php
                if ($page == 'laporan') {
                    echo 'class="active"';
                }
                ?>>
                    <a href="<?php echo base_url('Laporan_polisi'); ?>">
                        <i class="fa fa-bookmark"></i>
                        <span>Laporan Polisi</span>
                    </a>
                </li>
                <li <?php
                if ($page == 'disposisi') {
                    echo 'class="active"';
                }
                ?>>
                    <a href="<?php echo base_url('Disposisi'); ?>">
                        <i class="fa fa-android"></i>
                        <span>Disposisi</span>
                    </a>
                </li>

                <li <?php
                if ($page == 'document') {
                    echo 'class="active"';
                }
                ?>>
                    <a href="<?php echo base_url('Unggah'); ?>">
                        <i class="fa fa-bookmark"></i>
                        <span>Unggah Doc</span>
                    </a>
                </li>
            <?php } ?>
            <!--BATAS MENU ADMIN-->



            <!--MENU UNTUK KAPOLRES-->
            <?php if ($userdata->id_level == 1000) { ?>
                <li class="header">DASHBOARD</li>      
                <li <?php
                if ($page == 'home') {
                    echo 'class="active"';
                }
                ?>>
                    <a href="<?php echo base_url('Home'); ?>">
                        <i class="fa fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="header">DATA TRASAKSI</li>      
                <li <?php
                if ($page == 'laporan') {
                    echo 'class="active"';
                }
                ?>>
                    <a href="<?php echo base_url('Laporan_polisi'); ?>">
                        <i class="fa fa-bookmark"></i>
                        <span>Laporan Polisi</span>
                    </a>
                </li>
            <?php } ?>
            <!--BATAS MENU KAPOLRES-->




        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>