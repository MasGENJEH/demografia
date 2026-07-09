<?php echo $this->extend('layout/default'); ?>

<?php echo $this->section('judul'); ?>
<title>Create | Penduduk</title>
<?php echo $this->endSection(); ?>


<?php echo $this->section('form_tambah'); ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?php echo base_url('penduduk'); ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Penduduk</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?php echo base_url('home'); ?>">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="<?php echo base_url('penduduk'); ?>">Penduduk</a></div>
            <div class="breadcrumb-item">Tambah Pendududuk</div>
        </div>
    </div>



    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Masukan Data Penduduk Baru</h4>
                    </div>
                    <div class="card-body">
                        <?php $errors = session()->getFlashdata('errors'); ?>
                        <form action="<?php echo base_url('penduduk/save'); ?>" method="post" autocomplete="off">
                            <?php echo csrf_field(); ?>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" class="form-control <?php echo isset($errors['nama_lengkap']) ? 'is-invalid' : ''; ?>" value="<?php echo old('nama_lengkap'); ?>">
                                        <?php if (isset($errors['nama_lengkap'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['nama_lengkap']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="text" name="nik" class="form-control <?php echo isset($errors['nik']) ? 'is-invalid' : ''; ?>" value="<?php echo old('nik'); ?>">
                                        <?php if (isset($errors['nik'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['nik']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nomor KK</label>
                                        <input type="text" name="nomor_kk" class="form-control <?php echo isset($errors['nomor_kk']) ? 'is-invalid' : ''; ?>" value="<?php echo old('nomor_kk'); ?>">
                                        <?php if (isset($errors['nomor_kk'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['nomor_kk']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control <?php echo isset($errors['tanggal_lahir']) ? 'is-invalid' : ''; ?>" value="<?php echo old('tanggal_lahir'); ?>">
                                        <?php if (isset($errors['tanggal_lahir'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['tanggal_lahir']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <div class="form-check">
                                            <input class="form-check-input <?php echo isset($errors['jenis_kelamin']) ? 'is-invalid' : ''; ?>" type="radio" name="jenis_kelamin"
                                                id="radio_laki" value="Laki-laki" <?php echo old('jenis_kelamin') == 'Laki-laki' ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="radio_laki">Laki-laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input <?php echo isset($errors['jenis_kelamin']) ? 'is-invalid' : ''; ?>" type="radio" name="jenis_kelamin"
                                                id="radio_perempuan" value="Perempuan" <?php echo old('jenis_kelamin') == 'Perempuan' ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="radio_perempuan">Perempuan</label>
                                            <?php if (isset($errors['jenis_kelamin'])) { ?>
                                                <div class="invalid-feedback"><?php echo $errors['jenis_kelamin']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status_keluarga_select">Status Keluarga</label>
                                        <select class="form-control <?php echo isset($errors['status_keluarga']) ? 'is-invalid' : ''; ?>" id="status_keluarga_select" name="status_keluarga">
                                            <option value="" <?php echo old('status_keluarga') == '' ? 'selected' : ''; ?> disabled hidden>Pilih Status Keluarga</option>
                                            <option value="Kepala Keluarga" <?php echo old('status_keluarga') == 'Kepala Keluarga' ? 'selected' : ''; ?>>Kepala Keluarga</option>
                                            <option value="Istri" <?php echo old('status_keluarga') == 'Istri' ? 'selected' : ''; ?>>Istri</option>
                                            <option value="Anak" <?php echo old('status_keluarga') == 'Anak' ? 'selected' : ''; ?>>Anak</option>
                                            <option value="Menantu" <?php echo old('status_keluarga') == 'Menantu' ? 'selected' : ''; ?>>Menantu</option>
                                            <option value="Cucu" <?php echo old('status_keluarga') == 'Cucu' ? 'selected' : ''; ?>>Cucu</option>
                                            <option value="Orang Tua" <?php echo old('status_keluarga') == 'Orang Tua' ? 'selected' : ''; ?>>Orang Tua</option>
                                            <option value="Mertua" <?php echo old('status_keluarga') == 'Mertua' ? 'selected' : ''; ?>>Mertua</option>
                                            <option value="Famili Lain" <?php echo old('status_keluarga') == 'Famili Lain' ? 'selected' : ''; ?>>Famili Lain</option>
                                            <option value="Lainnya" <?php echo old('status_keluarga') == 'Lainnya' ? 'selected' : ''; ?>>Lainnya</option>
                                        </select>
                                        <?php if (isset($errors['status_keluarga'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['status_keluarga']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pendidikan_terakhir_select">Pendidikan Terakhir</label>
                                        <select class="form-control <?php echo isset($errors['pendidikan_terakhir']) ? 'is-invalid' : ''; ?>" id="pendidikan_terakhir_select"
                                            name="pendidikan_terakhir">
                                            <option value="" <?php echo old('pendidikan_terakhir') == '' ? 'selected' : ''; ?> disabled hidden>Pilih Pendidikan Terakhir</option>
                                            <option value="Tidak / Belum Sekolah" <?php echo old('pendidikan_terakhir') == 'Tidak / Belum Sekolah' ? 'selected' : ''; ?>>Tidak / Belum Sekolah</option>
                                            <option value="Belum Tamat SD / Sederajat" <?php echo old('pendidikan_terakhir') == 'Belum Tamat SD / Sederajat' ? 'selected' : ''; ?>>Belum Tamat SD / Sederajat</option>
                                            <option value="Tamat SD / Sederajat" <?php echo old('pendidikan_terakhir') == 'Tamat SD / Sederajat' ? 'selected' : ''; ?>>Tamat SD / Sederajat</option>
                                            <option value="SLTP / Sederajat" <?php echo old('pendidikan_terakhir') == 'SLTP / Sederajat' ? 'selected' : ''; ?>>SLTP / Sederajat</option>
                                            <option value="SLTA / Sederajat" <?php echo old('pendidikan_terakhir') == 'SLTA / Sederajat' ? 'selected' : ''; ?>>SLTA / Sederajat</option>
                                            <option value="Diploma I" <?php echo old('pendidikan_terakhir') == 'Diploma I' ? 'selected' : ''; ?>>Diploma I</option>
                                            <option value="Diploma II" <?php echo old('pendidikan_terakhir') == 'Diploma II' ? 'selected' : ''; ?>>Diploma II</option>
                                            <option value="Diploma III" <?php echo old('pendidikan_terakhir') == 'Diploma III' ? 'selected' : ''; ?>>Diploma III</option>
                                            <option value="Diploma IV" <?php echo old('pendidikan_terakhir') == 'Diploma IV' ? 'selected' : ''; ?>>Diploma IV</option>
                                            <option value="Strata I" <?php echo old('pendidikan_terakhir') == 'Strata I' ? 'selected' : ''; ?>>Strata I</option>
                                            <option value="Strata II" <?php echo old('pendidikan_terakhir') == 'Strata II' ? 'selected' : ''; ?>>Strata II</option>
                                            <option value="Strata III" <?php echo old('pendidikan_terakhir') == 'Strata III' ? 'selected' : ''; ?>>Strata III</option>
                                        </select>
                                        <?php if (isset($errors['pendidikan_terakhir'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['pendidikan_terakhir']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" name="pekerjaan" class="form-control <?php echo isset($errors['pekerjaan']) ? 'is-invalid' : ''; ?>" value="<?php echo old('pekerjaan'); ?>">
                                        <?php if (isset($errors['pekerjaan'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['pekerjaan']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status_perkawinan_select">Status Perkawinan</label>
                                        <select class="form-control <?php echo isset($errors['status_perkawinan']) ? 'is-invalid' : ''; ?>" id="status_perkawinan_select"
                                            name="status_perkawinan">
                                            <option value="" <?php echo old('status_perkawinan') == '' ? 'selected' : ''; ?> disabled hidden>Pilih Salah Satu</option>
                                            <option value="Belum Kawin" <?php echo old('status_perkawinan') == 'Belum Kawin' ? 'selected' : ''; ?>>Belum Kawin</option>
                                            <option value="Kawin" <?php echo old('status_perkawinan') == 'Kawin' ? 'selected' : ''; ?>>Kawin</option>
                                            <option value="Cerai Hidup" <?php echo old('status_perkawinan') == 'Cerai Hidup' ? 'selected' : ''; ?>>Cerai Hidup</option>
                                            <option value="Cerai Mati" <?php echo old('status_perkawinan') == 'Cerai Mati' ? 'selected' : ''; ?>>Cerai Mati</option>
                                            <option value="Kawin Belum Tercatat" <?php echo old('status_perkawinan') == 'Kawin Belum Tercatat' ? 'selected' : ''; ?>>Kawin Belum Tercatat</option>
                                        </select>
                                        <?php if (isset($errors['status_perkawinan'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['status_perkawinan']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Simpan Data</button>
                        </form>

                    </div>


                </div>
            </div>
</section>
<?php echo $this->endSection(); ?>