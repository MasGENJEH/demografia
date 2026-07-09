<?php echo $this->extend('layout/default'); ?>

<?php echo $this->section('judul'); ?>
<title>Klasifikasi Ekonomi | ML</title>
<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Klasifikasi Status Ekonomi</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= base_url('home') ?>">Dashboard</a></div>
            <div class="breadcrumb-item">Klasifikasi Ekonomi</div>
        </div>
    </div>

    <div class="section-body">

        <!-- ===== DESKRIPSI ===== -->
        <h2 class="section-title">
            <?php
            $methodIcons = [
                'decision_tree' => 'fas fa-sitemap',
                'naive_bayes'   => 'fas fa-calculator',
                'random_forest' => 'fas fa-tree',
            ];
            ?>
            <i class="<?= $methodIcons[$method] ?> mr-1"></i>
            <?= $methodLabel ?> — Machine Learning Klasifikasi Ekonomi
        </h2>
        <p class="section-lead">
            <?php if ($method === 'decision_tree'): ?>
                Klasifikasi menggunakan <b>Decision Tree</b>: model berbasis pohon keputusan yang memisahkan data melalui serangkaian aturan IF-THEN berdasarkan fitur Tanggungan, Pekerjaan, dan Pendidikan.
            <?php elseif ($method === 'naive_bayes'): ?>
                Klasifikasi menggunakan <b>Naive Bayes</b>: model probabilistik yang menghitung kemungkinan setiap kelas berdasarkan distribusi Gaussian dari fitur Tanggungan, Pekerjaan, dan Pendidikan.
            <?php else: ?>
                Klasifikasi menggunakan <b>Random Forest</b>: model ensemble yang menggabungkan 100 pohon keputusan untuk menghasilkan prediksi yang lebih robust dan akurat berdasarkan fitur Tanggungan, Pekerjaan, dan Pendidikan.
            <?php endif; ?>
        </p>

        <?php if (isset($error)) : ?>
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert"><span>&times;</span></button>
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    <?= $error ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- ===== SELECTOR METODE ===== -->
        <div class="row mb-3">
            <div class="col-12">
                <div class="card" style="border: none; box-shadow: none; background: transparent;">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center flex-wrap" style="gap: 8px;">
                            <span class="font-weight-bold mr-2" style="color: #495057;">
                                <i class="fas fa-cogs mr-1"></i> Pilih Metode ML:
                            </span>

                            <?php
                            $methodDefs = [
                                'decision_tree' => [
                                    'label' => 'Decision Tree',
                                    'icon'  => 'fas fa-sitemap',
                                    'color' => 'btn-primary',
                                    'desc'  => 'Pohon Keputusan',
                                ],
                                'naive_bayes' => [
                                    'label' => 'Naive Bayes',
                                    'icon'  => 'fas fa-calculator',
                                    'color' => 'btn-success',
                                    'desc'  => 'Probabilistik Gaussian',
                                ],
                                'random_forest' => [
                                    'label' => 'Random Forest',
                                    'icon'  => 'fas fa-tree',
                                    'color' => 'btn-warning',
                                    'desc'  => 'Ensemble 100 Pohon',
                                ],
                            ];

                            foreach ($methodDefs as $key => $def):
                                $isActive = ($method === $key);
                                $btnClass = $isActive ? $def['color'] : 'btn-outline-secondary';
                                $url      = base_url('klasifikasi') . '?method=' . $key;
                                if ($sort)  $url .= '&sort=' . $sort . '&order=' . $order;
                            ?>
                            <a href="<?= $url ?>"
                               class="btn <?= $btnClass ?>"
                               title="<?= $def['desc'] ?>"
                               style="transition: all 0.2s ease;">
                                <i class="<?= $def['icon'] ?> mr-1"></i>
                                <?= $def['label'] ?>
                                <?php if ($isActive): ?>
                                    <span class="badge badge-light ml-1" style="font-size: 0.7em;">Aktif</span>
                                <?php endif; ?>
                            </a>
                            <?php endforeach; ?>

                            <!-- Badge akurasi metode aktif -->
                            <?php if ($accuracy !== null): ?>
                            <span class="ml-auto" style="display: inline-flex; align-items: center; gap: 8px;">
                                <span class="badge badge-light border" style="font-size: 0.85em; padding: 6px 10px;">
                                    <i class="fas fa-info-circle mr-1 text-info"></i>
                                    Metode aktif: <strong><?= $methodLabel ?></strong>
                                </span>
                                <span class="badge <?= $accuracy >= 80 ? 'badge-success' : ($accuracy >= 60 ? 'badge-warning' : 'badge-danger') ?>" style="font-size: 0.9em; padding: 6px 12px;">
                                    <i class="fas fa-chart-line mr-1"></i>
                                    Akurasi CV: <strong><?= $accuracy ?>%</strong>
                                </span>
                            </span>
                            <?php else: ?>
                            <span class="ml-auto badge badge-light border" style="font-size: 0.85em; padding: 6px 10px;">
                                <i class="fas fa-info-circle mr-1 text-info"></i>
                                Metode aktif: <strong><?= $methodLabel ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== TABEL HASIL KLASIFIKASI ===== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            <i class="<?= $methodIcons[$method] ?> mr-1 text-primary"></i>
                            Hasil Klasifikasi — <span class="text-primary"><?= $methodLabel ?></span>
                        </h4>
                        <div class="card-header-action" style="display: flex; align-items: center; gap: 8px;">
                            <div class="mr-2">
                                <select class="form-control" style="width: auto; height: 32px; padding: 4px 10px; font-size: 0.9em; border-radius: 4px;" onchange="window.location.href=this.value">
                                    <option value="<?= base_url('klasifikasi') . '?method=' . $method . '&sort=' . $sort . '&order=' . $order ?>" <?= !$filter_label ? 'selected' : '' ?>>Semua Status</option>
                                    <option value="<?= base_url('klasifikasi') . '?method=' . $method . '&sort=' . $sort . '&order=' . $order . '&filter_label=Mampu' ?>" <?= $filter_label === 'Mampu' ? 'selected' : '' ?>>Mampu</option>
                                    <option value="<?= base_url('klasifikasi') . '?method=' . $method . '&sort=' . $sort . '&order=' . $order . '&filter_label=Menengah' ?>" <?= $filter_label === 'Menengah' ? 'selected' : '' ?>>Menengah</option>
                                    <option value="<?= base_url('klasifikasi') . '?method=' . $method . '&sort=' . $sort . '&order=' . $order . '&filter_label=Tidak Mampu' ?>" <?= $filter_label === 'Tidak Mampu' ? 'selected' : '' ?>>Tidak Mampu</option>
                                </select>
                            </div>
                            <?php if ($accuracy !== null): ?>
                            <span class="badge <?= $accuracy >= 80 ? 'badge-success' : ($accuracy >= 60 ? 'badge-warning' : 'badge-danger') ?>" style="font-size: 0.9em; padding: 6px 14px;">
                                <i class="fas fa-bullseye mr-1"></i>
                                Akurasi: <?= $accuracy ?>%
                            </span>
                            <?php endif; ?>
                            <span class="badge badge-primary" style="font-size: 0.9em; padding: 6px 12px;">
                                <i class="fas fa-database mr-1"></i>
                                <?= count($klasifikasi) ?> data ditampilkan
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        function sortLink($field, $label, $currentSort, $currentOrder, $method = '', $filter_label = '') {
                            $nextOrder = ($currentSort == $field && $currentOrder == 'asc') ? 'desc' : 'asc';
                            $icon = '';
                            if ($currentSort == $field) {
                                $icon = $currentOrder == 'asc'
                                    ? ' <i class="fas fa-sort-up"></i>'
                                    : ' <i class="fas fa-sort-down"></i>';
                            } else {
                                $icon = ' <i class="fas fa-sort" style="color:#ccc"></i>';
                            }
                            $url = base_url('klasifikasi') . "?sort=$field&order=$nextOrder";
                            if ($method) $url .= "&method=$method";
                            if ($filter_label) $url .= "&filter_label=" . urlencode($filter_label);
                            return "<a href='$url' style='color:inherit; text-decoration:none;'>$label$icon</a>";
                        }
                        ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th><?= sortLink('nomor_kk',    'Nomor KK',              $sort, $order, $method, $filter_label) ?></th>
                                        <th><?= sortLink('nama_kepala', 'Kepala Keluarga',        $sort, $order, $method, $filter_label) ?></th>
                                        <th><?= sortLink('tanggungan',  'Jml Tanggungan',         $sort, $order, $method, $filter_label) ?></th>
                                        <th><?= sortLink('pekerjaan',   'Pekerjaan Utama',        $sort, $order, $method, $filter_label) ?></th>
                                        <th><?= sortLink('pendidikan',  'Pendidikan Terakhir',    $sort, $order, $method, $filter_label) ?></th>
                                        <th><?= sortLink('prediksi',    'Prediksi Status Ekonomi',$sort, $order, $method, $filter_label) ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1 + (($page - 1) * $perPage);
                                    foreach ($klasifikasi as $row) :
                                    ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['nomor_kk'] ?></td>
                                        <td><?= $row['nama_kepala'] ?></td>
                                        <td><?= $row['tanggungan'] ?> orang</td>
                                        <td><?= $row['pekerjaan'] ?></td>
                                        <td><?= $row['pendidikan'] ?></td>
                                        <td>
                                            <?php
                                                $badgeConfig = [
                                                    'Mampu'       => ['class' => 'badge-success', 'icon' => 'fas fa-check-circle'],
                                                    'Menengah'    => ['class' => 'badge-warning',  'icon' => 'fas fa-minus-circle'],
                                                    'Tidak Mampu' => ['class' => 'badge-danger',   'icon' => 'fas fa-times-circle'],
                                                ];
                                                $cfg = $badgeConfig[$row['prediksi']] ?? ['class' => 'badge-secondary', 'icon' => 'fas fa-clock'];
                                            ?>
                                            <span class="badge <?= $cfg['class'] ?>" style="padding: 5px 10px; font-size: 0.8em;">
                                                <i class="<?= $cfg['icon'] ?> mr-1"></i>
                                                <?= strtoupper($row['prediksi']) ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                    <?php if (empty($klasifikasi)): ?>
                                    <tr>
                                        <td colspan="7" class="text-center py-4">
                                            <i class="fas fa-inbox fa-2x text-muted mb-2 d-block"></i>
                                            Belum ada data Kartu Keluarga di dalam database.
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <?= $pager_links ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== INFO CARD PERBANDINGAN METODE ===== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-chart-bar mr-1"></i> Perbandingan Akurasi & Metode ML</h4>
                        <?php if (!empty($accuracy_all)): ?>
                        <div class="card-header-action">
                            <span class="badge badge-light border" style="font-size: 0.8em; padding: 5px 10px;">
                                <i class="fas fa-info-circle mr-1 text-secondary"></i>
                                Akurasi dihitung menggunakan Stratified K-Fold Cross-Validation
                            </span>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <?php
                        $compCards = [
                            'decision_tree' => [
                                'label'   => 'Decision Tree',
                                'icon'    => 'fas fa-sitemap',
                                'color'   => '#007bff',
                                'border'  => 'border-primary',
                                'shadow'  => 'box-shadow: 0 0 0 2px #007bff33;',
                                'btn_on'  => 'btn-primary',
                                'btn_off' => 'btn-outline-primary',
                                'bar'     => 'bg-primary',
                                'desc'    => 'Pohon keputusan berbasis aturan IF-THEN. Mudah diinterpretasikan.',
                            ],
                            'naive_bayes' => [
                                'label'   => 'Naive Bayes',
                                'icon'    => 'fas fa-calculator',
                                'color'   => '#28a745',
                                'border'  => 'border-success',
                                'shadow'  => 'box-shadow: 0 0 0 2px #28a74533;',
                                'btn_on'  => 'btn-success',
                                'btn_off' => 'btn-outline-success',
                                'bar'     => 'bg-success',
                                'desc'    => 'Probabilistik Gaussian. Cepat & efisien untuk data kecil-menengah.',
                            ],
                            'random_forest' => [
                                'label'   => 'Random Forest',
                                'icon'    => 'fas fa-tree',
                                'color'   => '#e6a817',
                                'border'  => 'border-warning',
                                'shadow'  => 'box-shadow: 0 0 0 2px #ffc10733;',
                                'btn_on'  => 'btn-warning',
                                'btn_off' => 'btn-outline-warning',
                                'bar'     => 'bg-warning',
                                'desc'    => 'Ensemble 100 pohon. Akurasi tinggi, tahan overfitting.',
                            ],
                        ];
                        // Tentukan model terbaik (akurasi tertinggi)
                        $bestMethod = '';
                        if (!empty($accuracy_all)) {
                            $bestMethod = array_search(max($accuracy_all), $accuracy_all);
                        }
                        ?>
                        <div class="row">
                        <?php foreach ($compCards as $key => $cc): ?>
                            <?php
                                $isActive  = ($method === $key);
                                $isBest    = ($bestMethod === $key && !empty($accuracy_all));
                                $accVal    = $accuracy_all[$key] ?? null;
                                $barWidth  = $accVal !== null ? (int)$accVal : 0;
                            ?>
                            <div class="col-md-4 mb-3">
                                <div class="card border <?= $isActive ? $cc['border'] : '' ?>" style="<?= $isActive ? $cc['shadow'] : '' ?>; position: relative;">
                                    <?php if ($isBest): ?>
                                    <div style="position: absolute; top: -10px; right: 10px; z-index: 10;">
                                        <span class="badge badge-danger" style="font-size: 0.75em; padding: 4px 8px;">
                                            <i class="fas fa-trophy mr-1"></i>Terbaik
                                        </span>
                                    </div>
                                    <?php endif; ?>
                                    <div class="card-body p-3">
                                        <div class="text-center mb-2">
                                            <div style="font-size: 2rem; color: <?= $cc['color'] ?>;"><i class="<?= $cc['icon'] ?>"></i></div>
                                            <h6 class="mt-2 font-weight-bold mb-1"><?= $cc['label'] ?></h6>
                                            <p class="text-muted small mb-2"><?= $cc['desc'] ?></p>
                                        </div>

                                        <!-- Akurasi progress bar -->
                                        <?php if ($accVal !== null): ?>
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <small class="font-weight-bold text-muted"><i class="fas fa-chart-line mr-1"></i>Akurasi CV</small>
                                                <small class="font-weight-bold" style="color: <?= $accVal >= 80 ? '#28a745' : ($accVal >= 60 ? '#ffc107' : '#dc3545') ?>;">
                                                    <?= $accVal ?>%
                                                </small>
                                            </div>
                                            <div class="progress" style="height: 10px; border-radius: 5px;">
                                                <div class="progress-bar <?= $cc['bar'] ?>"
                                                     role="progressbar"
                                                     style="width: <?= $barWidth ?>%; border-radius: 5px; transition: width 1s ease;"
                                                     aria-valuenow="<?= $barWidth ?>"
                                                     aria-valuemin="0"
                                                     aria-valuemax="100">
                                                </div>
                                            </div>
                                            <small class="text-muted" style="font-size: 0.7em;">
                                                <?php if ($accVal >= 80): ?>
                                                    <i class="fas fa-smile text-success mr-1"></i>Akurasi Tinggi
                                                <?php elseif ($accVal >= 60): ?>
                                                    <i class="fas fa-meh text-warning mr-1"></i>Akurasi Sedang
                                                <?php else: ?>
                                                    <i class="fas fa-frown text-danger mr-1"></i>Akurasi Rendah
                                                <?php endif; ?>
                                            </small>
                                        </div>
                                        <?php else: ?>
                                        <div class="mb-3 text-center text-muted small">
                                            <i class="fas fa-spinner fa-spin mr-1"></i>Akurasi belum tersedia
                                        </div>
                                        <?php endif; ?>

                                        <div class="text-center">
                                            <a href="<?= base_url('klasifikasi?method=' . $key) ?>" class="btn btn-sm <?= $isActive ? $cc['btn_on'] : $cc['btn_off'] ?>">
                                                <?= $isActive ? '<i class="fas fa-check mr-1"></i>Aktif' : 'Gunakan' ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php echo $this->endSection(); ?>
