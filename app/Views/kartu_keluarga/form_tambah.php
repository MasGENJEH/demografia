<?php echo $this->extend('layout/default'); ?>

<?php echo $this->section('judul'); ?>
<title>Create | Kartu Keluarga</title>
<?php echo $this->endSection(); ?>


<?php echo $this->section('form_tambah'); ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?php echo base_url('kartu-keluarga'); ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Kartu Keluarga</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?php echo base_url('home'); ?>">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="<?php echo base_url('kartu-keluarga'); ?>">Kartu Keluarga</a></div>
            <div class="breadcrumb-item">Tambah Kartu Keluarga</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Masukan Data Kartu Keluarga Baru</h4>
                    </div>
                    <div class="card-body">
                        <?php $errors = session()->getFlashdata('errors'); ?>
                        <form action="<?php echo base_url('kartu-keluarga/save'); ?>" method="post" autocomplete="off">
                            <?php echo csrf_field(); ?>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nomor KK</label>
                                        <input type="number" name="nomor_kk" class="form-control <?php echo isset($errors['nomor_kk']) ? 'is-invalid' : ''; ?>" value="<?php echo old('nomor_kk'); ?>">
                                        <?php if (isset($errors['nomor_kk'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['nomor_kk']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control <?php echo isset($errors['alamat']) ? 'is-invalid' : ''; ?>" value="<?php echo old('alamat'); ?>">
                                        <?php if (isset($errors['alamat'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['alamat']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>RT</label>
                                        <input type="text" name="rt" class="form-control <?php echo isset($errors['rt']) ? 'is-invalid' : ''; ?>" value="<?php echo old('rt'); ?>">
                                        <?php if (isset($errors['rt'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['rt']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>RW</label>
                                        <input type="text" name="rw" class="form-control <?php echo isset($errors['rw']) ? 'is-invalid' : ''; ?>" value="<?php echo old('rw'); ?>">
                                        <?php if (isset($errors['rw'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['rw']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Dusun</label>
                                        <input type="text" name="dusun" class="form-control <?php echo isset($errors['dusun']) ? 'is-invalid' : ''; ?>" value="<?php echo old('dusun'); ?>">
                                        <?php if (isset($errors['dusun'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['dusun']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pendapatan</label>
                                        <input type="number" name="pendapatan" class="form-control <?php echo isset($errors['pendapatan']) ? 'is-invalid' : ''; ?>" value="<?php echo old('pendapatan'); ?>">
                                        <?php if (isset($errors['pendapatan'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['pendapatan']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Skala Rumah</label>
                                        <input type="number" name="skala_rumah" class="form-control <?php echo isset($errors['skala_rumah']) ? 'is-invalid' : ''; ?>" value="<?php echo old('skala_rumah'); ?>">
                                        <?php if (isset($errors['skala_rumah'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['skala_rumah']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="desa_select">Status Kependudukan</label>
                                        <select class="form-control <?php echo isset($errors['desa']) ? 'is-invalid' : ''; ?>" id="desa_select"
                                            name="desa">
                                            <option value="" <?php echo old('desa') == '' ? 'selected' : ''; ?> disabled hidden>Pilih Status Kependududkan</option>
                                            <option value="BENGLE" <?php echo old('desa') == 'BENGLE' ? 'selected' : ''; ?>>Bengle</option>
                                            <option value="LUAR BENGLE" <?php echo old('desa') == 'LUAR BENGLE' ? 'selected' : ''; ?>>Luar Bengle</option>
                                        </select>
                                        <?php if (isset($errors['desa'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['desa']; ?></div>
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