<?php echo $this->extend('layout/default'); ?>

<?php echo $this->section('judul'); ?>
<title>View | Penduduk</title>
<?php echo $this->endSection(); ?>



<?php echo $this->section('tabel_penduduk'); ?>
<section class="section">
    <div class="section-header">

        <h1>Data Penduduk</h1>
        <div class="section-header-button">
            <a href="<?php echo base_url('penduduk/tambah'); ?>" class="btn btn-primary">Tambah Penduduk</a>
        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Penduduk</a></div>
            <div class="breadcrumb-item">Data Penduduk</div>
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
                        <h4>Tabel Penduduk</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pekerjaan</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Action</th>
                                </tr>
                                <?php foreach ($data_penduduk as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $value->nama_lengkap; ?></td>
                                    <td><?php echo $value->tanggal_lahir; ?></td>
                                    <td><?php echo $value->jenis_kelamin; ?></td>
                                    <td><?php echo $value->pekerjaan; ?></td>
                                    <td>
                                        <div class="badge badge-info"><?php echo $value->pendidikan_terakhir; ?></div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span
                                            class="sr-only">(current)</span></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php echo $this->endSection(); ?>