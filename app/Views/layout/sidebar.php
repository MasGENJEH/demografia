<aside id="sidebar-wrapper">
    <div class="sidebar-brand">

        <a href="<?php echo base_url(); ?>"><i class="fa fa-user-circle-o"></i>Demografia</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">

        <li class="menu-header">Starter</li>

        <li class="nav-item dropdown active">
            <a class="nav-link has-dropdown" href="index-0.html">
                <span><i class="far fa-user"></i>Penduduk Desa</span></a>
            <ul class="dropdown-menu">

                <li><a class="nav-link" href="<?php echo base_url('/penduduk'); ?>">
                        <i class="fas fa-table fa-fw"></i>
                        <span>Tabel Penduduk</span></a></li>
                <li><a class="nav-link" href="<?php echo base_url('/penduduk/tambah'); ?>">
                        <i class="fas fa-user-plus fa-fw"></i>
                        <span>Tambah Penduduk</span></a></li>
                <!-- <li><a class="nav-link" href="<?php echo base_url('/penduduk/ubah'); ?>">
                                        <i class="fas fa-user-edit fa-fw"></i>
                                        <span>Ubah Data Penduduk</span></a></li> -->
            </ul>
        </li>

        <li class="nav-item dropdown active">
            <a class="nav-link has-dropdown" href="index-0.html">
                <span><i class="far fa-user"></i>Kartu Keluarga</span></a>
            <ul class="dropdown-menu">

                <li><a class="nav-link" href="<?php echo base_url('/kartu-keluarga'); ?>">
                        <i class="fas fa-table fa-fw"></i>
                        <span>Tabel Kerluarga</span></a></li>
                <li><a class="nav-link" href="<?php echo base_url('/kartu-keluarga/tambah'); ?>">
                        <i class="fas fa-user-plus fa-fw"></i>
                        <span>Tambah Kerluarga</span></a></li>
                <!-- <li><a class="nav-link" href="<?php echo base_url('/kartu-keluarga/ubah'); ?>">
                                        <i class="fas fa-user-edit fa-fw"></i>
                                        <span>Ubah Data Penduduk</span></a></li> -->
            </ul>
        </li>

        <li class="nav-item dropdown active">
            <a class="nav-link has-dropdown" href="index-0.html">
                <span><i class="fas fa-hand-holding-heart fa-fw"></i>Bantuan Sosial</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="<?php echo base_url('/penduduk'); ?>">
                        <i class="fas fa-table fa-fw"></i>
                        <span>Daftar Penerima</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>
