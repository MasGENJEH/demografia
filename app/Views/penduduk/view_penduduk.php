<?php echo $this->extend('layout/default'); ?>
<?php echo $this->section('tabel_penduduk'); ?>
<section class="section">
    <div class="section-header">
        <h1>Data Penduduk</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Penduduk</a></div>
            <div class="breadcrumb-item">Data Penduduk</div>
        </div>
    </div>
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
                                    <th>Status Perkawinan</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Irwansyah Saputra</td>
                                    <td>2000-01-09</td>
                                    <td>Laki-laki</td>
                                    <td>Karyawan Swasta</td>
                                    <td>
                                        <div class="badge badge-success">Active</div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Detail</a>
                                        <a href="#" class="btn btn-warning">Ubah</a>
                                        <a href="#" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
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