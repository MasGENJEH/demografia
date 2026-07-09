<?php echo $this->extend('layout/default'); ?>

<?php echo $this->section('judul'); ?>
<title>Create | User</title>
<?php echo $this->endSection(); ?>


<?php echo $this->section('form_tambah'); ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?php echo base_url('pengguna'); ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah User</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?php echo base_url('home'); ?>">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="<?php echo base_url('pengguna'); ?>">User</a></div>
            <div class="breadcrumb-item">Tambah User</div>
        </div>
    </div>



    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Masukan Data User Baru</h4>
                    </div>
                    <div class="card-body">
                        <?php $errors = session()->getFlashdata('errors'); ?>
                        <form action="<?php echo base_url('pengguna/save'); ?>" method="post" autocomplete="off">
                            <?php echo csrf_field(); ?>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : ''; ?>" value="<?php echo old('username'); ?>">
                                        <?php if (isset($errors['username'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['username']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>email</label>
                                        <input type="email" name="email" class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : ''; ?>" value="<?php echo old('email'); ?>">
                                        <?php if (isset($errors['email'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['email']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control <?php echo isset($errors['password']) ? 'is-invalid' : ''; ?>">
                                        <?php if (isset($errors['password'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['password']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role_select">Role</label>
                                        <select class="form-control <?php echo isset($errors['role']) ? 'is-invalid' : ''; ?>" id="role_select" name="role">
                                            <option value="" <?php echo old('role') == '' ? 'selected' : ''; ?> disabled hidden>Pilih Role</option>
                                            <option value="admin" <?php echo old('role') == 'admin' ? 'selected' : ''; ?>>Admin</option>
                                            <option value="rt" <?php echo old('role') == 'rt' ? 'selected' : ''; ?>>RT</option>
                                            <option value="rw" <?php echo old('role') == 'rw' ? 'selected' : ''; ?>>RW</option>
                                        </select>
                                        <?php if (isset($errors['role'])) { ?>
                                            <div class="invalid-feedback"><?php echo $errors['role']; ?></div>
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