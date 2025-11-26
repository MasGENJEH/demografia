<aside id="sidebar-wrapper">
    <div class="sidebar-brand">

        <a href="<?php echo base_url('home'); ?>"><i class="fa fa-user-circle-o"></i>Demografia</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">

        <li class="menu-header">Menu</li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('home'); ?>">
                <span><i class="fa fa-home" aria-hidden="true"></i>Dashboard</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link has-dropdown" href="#"><span><i class="far fa-user" aria-hidden="true"></i>Penduduk
                    Desa</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="<?php echo base_url('/penduduk'); ?>">
                        <i class="fas fa-table fa-fw"></i>
                        <span>Tabel Penduduk</span></a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo base_url('/penduduk/tambah'); ?>">
                        <i class="fas fa-user-plus fa-fw"></i>
                        <span>Tambah Penduduk</span></a>
                </li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link has-dropdown" href="#">
                <span><i class="fa fa-users" aria-hidden="true"></i>Kartu Keluarga</span></a>
            <ul class="dropdown-menu">

                <li><a class="nav-link" href="<?php echo base_url('/kartu-keluarga'); ?>">
                        <i class="fas fa-table fa-fw"></i>
                        <span>Tabel Keluarga</span></a></li>
                <li><a class="nav-link" href="<?php echo base_url('/kartu-keluarga/tambah'); ?>">
                        <i class="fas fa-user-plus fa-fw"></i>
                        <span>Tambah Keluarga</span></a></li>
            </ul>
        </li>

        <?php if (session()->get('role') == 'admin') { ?>
        <li class="nav-item dropdown">
            <a class="nav-link has-dropdown" href="#">
                <span><i class="fa fa-users" aria-hidden="true"></i>Pengguna</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url('/pengguna'); ?>">
                        <i class="fas fa-table fa-fw"></i>
                        <span>Tabel Pengguna</span></a></li>
                <li><a class="nav-link" href="<?php echo base_url('/pengguna/tambah'); ?>">
                        <i class="fas fa-user-plus fa-fw"></i>
                        <span>Tambah Pengguna</span></a></li>
            </ul>
        </li>
        <?php }  ?>

        <li class="nav-item dropdown">
            <a class="nav-link has-dropdown" href="#">
                <span><i class="fas fa-hand-holding-heart fa-fw"></i>Bantuan Sosial</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="<?php echo base_url('/bansos'); ?>">
                        <i class="fas fa-table fa-fw"></i>
                        <span>Daftar Penerima</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>