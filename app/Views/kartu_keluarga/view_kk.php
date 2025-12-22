<?php echo $this->extend('layout/default'); ?>

<?php echo $this->section('judul'); ?>
<title>View | Kartu Keluarga</title>
<?php echo $this->endSection(); ?>



<?php echo $this->section('kartu_keluarga'); ?>
<section class="section">
    <div class="section-header">

        <h1>Data Kartu Keluarga</h1>
        <div class="section-header-button">
            <a href="<?php echo base_url('kartu-keluarga/tambah'); ?>" class="btn btn-primary">Tambah Kartu Keluarga</a>
        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?php echo base_url('home'); ?>">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="<?php echo base_url('kartu-keluarga'); ?>">Kartu Keluarga</a></div>
            <div class="breadcrumb-item">Data Kartu Keluarga</div>
        </div>
    </div>

    <?php if (session()->getFlashdata('success')) { ?>
    <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">x</button>
            <b>Success !</b>
            <?php echo session()->getFlashdata('success'); ?>
        </div>
    </div>
    <?php }  ?>
    <?php if (session()->getFlashdata('error')) { ?>
    <div class="alert alert-danger alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">x</button>
            <b>Success !</b>
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    </div>
    <?php }  ?>
    <div class="section-body">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tabel Kartu Keluarga</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Nomor KK</th>
                                    <th>Alamat</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Dusun</th>
                                    <th>Status Penduduk</th>
                                    <th>Pendapatan</th>
                                    <th>Skala Rumah</th>
                                    <th>Verifikasi RT</th>
                                    <th>Verifikasi RW</th>
                                    <th>Action</th>
                                </tr>
                                <?php $userRole = session()->get('role'); ?>
                                <?php $page = isset($_GET['page']) ? $_GET['page'] : 1; ?>
                                <?php $no = 1 + (10 * ($page - 1)); ?>
                                <?php foreach ($kartu_keluarga as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $value->nomor_kk; ?></td>
                                    <td><?php echo $value->alamat; ?></td>
                                    <td><?php echo $value->rt; ?></td>
                                    <td><?php echo $value->rw; ?></td>
                                    <td><?php echo $value->dusun; ?></td>
                                    <td><?php if ($value->desa === 'BENGLE') { ?>
                                            <span class="badge badge-primary">PENDUDUK ASLI</span>
                                        <?php } else { ?>
                                            <span class="badge badge-warning">PENDATANG</span>
                                        <?php } ?></td>
                                    <td>Rp <?php echo number_format($value->pendapatan, 0, ',', '.'); ?></td>
                                    <td><?php echo $value->skala_rumah; ?></td>
                                <?php if ($userRole === 'rt') { ?>
                                    <td>
                                        <?php if ($userRole !== 'rt') { ?>
                                            <?php if ($value->status_verifikasi_rt === 'DISETUJUI') { ?>
                                                <span class="badge badge-success"><?php echo $value->status_verifikasi_rt; ?></span>
                                            <?php } elseif ($value->status_verifikasi_rt === 'TIDAK DISETUJUI') { ?>
                                                <span class="badge badge-danger"><?php echo $value->status_verifikasi_rt; ?></span>
                                            <?php } elseif ($value->status_verifikasi_rt === 'BELUM DISETUJUI') { ?>
                                                <span class="badge badge-warning"><?php echo $value->status_verifikasi_rt; ?></span>
                                            <?php } ?>

                                            <?php } else { ?>
                                                <?php if ($value->status_verifikasi_rt !== 'DISETUJUI') { ?>
                                                    <form action="<?php echo base_url('kartu-keluarga/verifikasi-rt/'.$value->nomor_kk); ?>" method="POST" style="display:inline;">
                                                        <?php echo csrf_field(); ?>
                                                        <button type="submit" class="btn btn-warning btn-sm">
                                                            SETUJUI
                                                        </button>
                                                    </form>
                                                <?php } else { ?>
                                                    <span class="badge badge-success">DISETUJUI</span>
                                                <?php } ?>
                                        <?php } ?>
                                    </td>
                                    <td><?php if ($value->status_verifikasi_rw === 'DISETUJUI') { ?>
                                                <span class="badge badge-success"><?php echo $value->status_verifikasi_rw; ?></span>
                                            <?php } elseif ($value->status_verifikasi_rw === 'TIDAK DISETUJUI') { ?>
                                                <span class="badge badge-danger"><?php echo $value->status_verifikasi_rw; ?></span>
                                            <?php } elseif ($value->status_verifikasi_rw === 'BELUM DISETUJUI') { ?>
                                                <span class="badge badge-warning"><?php echo $value->status_verifikasi_rw; ?></span>
                                            <?php } ?>
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Khusus Admin</span> 
                                    </td>

                                <?php } elseif ($userRole === 'rw') { ?>
                                    <td><?php if ($value->status_verifikasi_rt === 'DISETUJUI') { ?>
                                                <span class="badge badge-success"><?php echo $value->status_verifikasi_rt; ?></span>
                                            <?php } elseif ($value->status_verifikasi_rt === 'TIDAK DISETUJUI') { ?>
                                                <span class="badge badge-danger"><?php echo $value->status_verifikasi_rt; ?></span>
                                            <?php } elseif ($value->status_verifikasi_rt === 'BELUM DISETUJUI') { ?>
                                                <span class="badge badge-warning"><?php echo $value->status_verifikasi_rt; ?></span>
                                            <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($userRole !== 'rw') { ?>
                                            <?php if ($value->status_verifikasi_rw === 'DISETUJUI') { ?>
                                                <span class="badge badge-success"><?php echo $value->status_verifikasi_rw; ?></span>
                                            <?php } elseif ($value->status_verifikasi_rw === 'TIDAK DISETUJUI') { ?>
                                                <span class="badge badge-danger"><?php echo $value->status_verifikasi_rw; ?></span>
                                            <?php } elseif ($value->status_verifikasi_rw === 'BELUM DISETUJUI') { ?>
                                                <span class="badge badge-warning"><?php echo $value->status_verifikasi_rw; ?></span>
                                            <?php } ?>

                                            <?php } else { ?>
                                                <?php if ($value->status_verifikasi_rw !== 'DISETUJUI') { ?>
                                                    <form action="<?php echo base_url('kartu-keluarga/verifikasi-rw/'.$value->nomor_kk); ?>" method="POST" style="display:inline;">
                                                        <?php echo csrf_field(); ?>
                                                        <button type="submit" class="btn btn-warning btn-sm">
                                                            SETUJUI
                                                        </button>
                                                    </form>
                                                <?php } else { ?>
                                                    <span class="badge badge-success">DISETUJUI</span>
                                                <?php } ?>
                                        <?php } ?>
                                    </td>
                                    
                                    <td>
                                        <span class="badge badge-info">Khusus Admin</span> 
                                    </td>
                                <?php } elseif ($userRole === 'admin') { ?>
                                    <td><?php if ($value->status_verifikasi_rt === 'DISETUJUI') { ?>
                                                <span class="badge badge-success"><?php echo $value->status_verifikasi_rt; ?></span>
                                            <?php } elseif ($value->status_verifikasi_rt === 'TIDAK DISETUJUI') { ?>
                                                <span class="badge badge-danger"><?php echo $value->status_verifikasi_rt; ?></span>
                                            <?php } elseif ($value->status_verifikasi_rt === 'BELUM DISETUJUI') { ?>
                                                <span class="badge badge-warning"><?php echo $value->status_verifikasi_rt; ?></span>
                                            <?php } ?>
                                    </td>
                                    <td><?php if ($value->status_verifikasi_rw === 'DISETUJUI') { ?>
                                                <span class="badge badge-success"><?php echo $value->status_verifikasi_rw; ?></span>
                                            <?php } elseif ($value->status_verifikasi_rw === 'TIDAK DISETUJUI') { ?>
                                                <span class="badge badge-danger"><?php echo $value->status_verifikasi_rw; ?></span>
                                            <?php } elseif ($value->status_verifikasi_rw === 'BELUM DISETUJUI') { ?>
                                                <span class="badge badge-warning"><?php echo $value->status_verifikasi_rw; ?></span>
                                            <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('kartu-keluarga/ubah/'.$value->nomor_kk); ?>"
                                            class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                        <form class="d-inline" action="<?php echo base_url('kartu-keluarga/'.$value->nomor_kk); ?>"
                                            method="post" onsubmit="return confirm('Anda yakin ingin menghapus data?')">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                        <?php } elseif ($userRole === 'rt') { ?>
                                            <span class="badge badge-secondary">tampilan ketika RT</span>
                                        <?php } else { ?>
                                            <span class="badge badge-info"><?php echo $value->status_verifikasi_rt; ?></span>
                                    </td>
                                <?php } ?>
                                    <!-- <td>
                                        <a href="<?php echo base_url('kartu-keluarga/ubah/'.$value->nomor_kk); ?>"
                                            class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                        <form class="d-inline"
                                            action="<?php echo base_url('kartu-keluarga/'.$value->nomor_kk); ?>"
                                            method="post" onsubmit="return confirm('Anda yakin ingin menghapus data?')">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td> -->
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <?php echo $pager->links('default', 'pagination'); ?>

                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php echo $this->endSection(); ?>