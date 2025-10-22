<?php echo $this->extend('layout/default'); ?>
<?php echo $this->section('form_tambah'); ?>

<section class="section">
    <div class="section-header">
        <h1>Tambah Penduduk</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Penduduk</a></div>
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
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nomor KK</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="radio_laki"
                                    value="Laki-laki">
                                <label class="form-check-label" for="radio_laki">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="radio_perempuan"
                                    value="Perempuan">
                                <label class="form-check-label" for="radio_perempuan">Perempuan</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status_keluarga_select">Status Keluarga</label>
                            <select class="form-control" id="status_keluarga_select" name="status_keluarga">
                                <option value="" selected disabled hidden>Pilih Status Keluarga</option>
                                <option value="Kepala Keluarga">Kepala Keluarga</option>
                                <option value="Suami">Suami</option>
                                <option value="Istri">Istri</option>
                                <option value="Anak">Anak</option>
                                <option value="Menantu">Menantu</option>
                                <option value="Cucu">Cucu</option>
                                <option value="Orang Tua">Orang Tua</option>
                                <option value="Mertua">Mertua</option>
                                <option value="Famili Lain">Famili Lain</option>
                                <option value="Lainnya">Lainnya</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_terakhir_select">Pendidikan Terakhir</label>
                            <select class="form-control" id="pendidikan_terakhir_select" name="pendidikan_terakhir">
                                <option value="" selected disabled hidden>Pilih Pendidikan Terakhir</option>
                                <option value="Tidak / Belum Sekolah">Tidak / Belum Sekolah</option>
                                <option value="Belum Tamat SD / Sederajat">Belum Tamat SD / Sederajat</option>
                                <option value="Tamat SD / Sederajat">Tamat SD / Sederajat</option>
                                <option value="SLTP / Sederajat">SLTP / Sederajat</option>
                                <option value="SLTA / Sederajat">SLTA / Sederajat</option>
                                <option value="Diploma I">Diploma I</option>
                                <option value="Diploma II">Diploma II</option>
                                <option value="Diploma III">Diploma III</option>
                                <option value="Diploma IV">Diploma IV</option>
                                <option value="Strata I">Strata I</option>
                                <option value="Strata II">Strata II</option>
                                <option value="Strata III">Strata III</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="status_perkawinan_select">Status Perkawinan</label>
                            <select class="form-control" id="status_perkawinan_select" name="status_perkawinan">
                                <option value="" selected disabled hidden>Pilih Salah Satu</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                                <option value="Cerai Mati">Cerai Mati</option>
                                <option value="Kawin Belum Tercatat">Kawin Belum Tercatat</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Simpan Data</button>
                    </div>

                </div>
            </div>
</section>
<?php echo $this->endSection(); ?>