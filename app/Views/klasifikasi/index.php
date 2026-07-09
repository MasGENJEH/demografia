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
                'rule_based'    => 'fas fa-balance-scale',
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
            <?php elseif ($method === 'random_forest'): ?>
                Klasifikasi menggunakan <b>Random Forest</b>: model ensemble yang menggabungkan 100 pohon keputusan untuk menghasilkan prediksi yang lebih robust dan akurat berdasarkan fitur Tanggungan, Pekerjaan, dan Pendidikan.
            <?php else: ?>
                Klasifikasi menggunakan <b>Rule-Based Expert System</b>: sistem pakar yang mengevaluasi secara manual berdasarkan kombinasi skor Pekerjaan, Pendidikan, dan jumlah Tanggungan secara deterministik.
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
                                'rule_based' => [
                                    'label' => 'Rule-Based',
                                    'icon'  => 'fas fa-balance-scale',
                                    'color' => 'btn-info',
                                    'desc'  => 'Sistem Pakar Aturan',
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
                            <?php if ($metrics !== null): ?>
                            <span class="ml-auto" style="display: inline-flex; align-items: center; gap: 8px; flex-wrap: wrap;">
                                <span class="badge badge-light border" style="font-size: 0.85em; padding: 6px 10px;">
                                    <i class="fas fa-info-circle mr-1 text-info"></i>
                                    Metode aktif: <strong><?= $methodLabel ?></strong>
                                </span>
                                <span class="badge <?= $metrics['accuracy'] >= 80 ? 'badge-success' : ($metrics['accuracy'] >= 60 ? 'badge-warning' : 'badge-danger') ?>" style="font-size: 0.9em; padding: 6px 12px;">
                                    <i class="fas fa-bullseye mr-1"></i>
                                    Accuracy: <strong><?= $metrics['accuracy'] ?>%</strong>
                                </span>
                                <span class="badge <?= $metrics['f1'] >= 80 ? 'badge-success' : ($metrics['f1'] >= 60 ? 'badge-warning' : 'badge-danger') ?>" style="font-size: 0.9em; padding: 6px 12px;">
                                    <i class="fas fa-balance-scale mr-1"></i>
                                    F1-Score: <strong><?= $metrics['f1'] ?>%</strong>
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
                            <div class="mr-2 d-flex align-items-center" style="gap: 8px;">
                                <select class="form-control" style="width: auto; height: 32px; padding: 4px 10px; font-size: 0.9em; border-radius: 4px;" onchange="window.location.href=this.value">
                                    <option value="<?= base_url('klasifikasi') . '?method=' . $method . '&sort=' . $sort . '&order=' . $order ?>" <?= !$filter_label ? 'selected' : '' ?>>Semua Status</option>
                                    <option value="<?= base_url('klasifikasi') . '?method=' . $method . '&sort=' . $sort . '&order=' . $order . '&filter_label=Mapan' ?>" <?= $filter_label === 'Mapan' ? 'selected' : '' ?>>Mapan</option>
                                    <option value="<?= base_url('klasifikasi') . '?method=' . $method . '&sort=' . $sort . '&order=' . $order . '&filter_label=Berkembang' ?>" <?= $filter_label === 'Berkembang' ? 'selected' : '' ?>>Berkembang</option>
                                    <option value="<?= base_url('klasifikasi') . '?method=' . $method . '&sort=' . $sort . '&order=' . $order . '&filter_label=Rentan' ?>" <?= $filter_label === 'Rentan' ? 'selected' : '' ?>>Rentan</option>
                                </select>
                                <?php if ($filter_label || $sort): ?>
                                    <a href="<?= base_url('klasifikasi') . '?method=' . $method ?>" class="btn btn-outline-danger btn-sm" style="height: 32px; display: inline-flex; align-items: center; padding: 0 10px;" title="Reset Filter & Urutan">
                                        <i class="fas fa-undo mr-1"></i> Reset
                                    </a>
                                <?php endif; ?>
                            </div>
                            <?php if ($metrics !== null): ?>
                            <span class="badge <?= $metrics['accuracy'] >= 80 ? 'badge-success' : ($metrics['accuracy'] >= 60 ? 'badge-warning' : 'badge-danger') ?>" style="font-size: 0.9em; padding: 6px 14px;">
                                <i class="fas fa-bullseye mr-1"></i>
                                Akurasi: <?= $metrics['accuracy'] ?>%
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
                                                    'Mapan'       => ['class' => 'badge-success', 'icon' => 'fas fa-check-circle'],
                                                    'Berkembang'  => ['class' => 'badge-warning', 'icon' => 'fas fa-minus-circle'],
                                                    'Rentan'      => ['class' => 'badge-danger',  'icon' => 'fas fa-times-circle'],
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
                        <h4><i class="fas fa-chart-bar mr-1"></i> Perbandingan Performa Model ML</h4>
                        <?php if (!empty($metrics_all)): ?>
                        <div class="card-header-action">
                            <span class="badge badge-light border" style="font-size: 0.8em; padding: 5px 10px;">
                                <i class="fas fa-info-circle mr-1 text-secondary"></i>
                                Dihitung menggunakan Stratified K-Fold Cross-Validation
                            </span>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <?php
                        // Tentukan model terbaik (akurasi tertinggi)
                        $bestMethod = '';
                        if (!empty($metrics_all)) {
                            $bestAcc = -1;
                            foreach ($metrics_all as $k => $m) {
                                if (isset($m['accuracy']) && $m['accuracy'] > $bestAcc) {
                                    $bestAcc = $m['accuracy'];
                                    $bestMethod = $k;
                                }
                            }
                        }
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
                            'rule_based' => [
                                'label'   => 'Rule-Based',
                                'icon'    => 'fas fa-balance-scale',
                                'color'   => '#17a2b8',
                                'border'  => 'border-info',
                                'shadow'  => 'box-shadow: 0 0 0 2px #17a2b833;',
                                'btn_on'  => 'btn-info',
                                'btn_off' => 'btn-outline-info',
                                'bar'     => 'bg-info',
                                'desc'    => 'Sistem pakar (Expert System) yang memakai aturan logika penentuan kemiskinan yang konsisten dan absolut (Akurasi logis 100%).',
                            ],
                        ];
                        ?>
                        <div class="row">
                        <?php foreach ($compCards as $key => $cc): ?>
                            <?php
                                $isActive  = ($method === $key);
                                $isBest    = ($bestMethod === $key && !empty($metrics_all));
                                $mVal      = $metrics_all[$key] ?? null;
                            ?>
                            <div class="col-md-6 col-lg-3 mb-3">
                                <div class="card border <?= $isActive ? $cc['border'] : '' ?>" style="<?= $isActive ? $cc['shadow'] : '' ?>; position: relative; height: 100%;">
                                    <?php if ($isBest): ?>
                                    <div style="position: absolute; top: -10px; right: 10px; z-index: 10;">
                                        <span class="badge badge-danger" style="font-size: 0.75em; padding: 4px 8px;">
                                            <i class="fas fa-trophy mr-1"></i>Akurasi Terbaik
                                        </span>
                                    </div>
                                    <?php endif; ?>
                                    <div class="card-body p-3 d-flex flex-column">
                                        <div class="text-center mb-3">
                                            <div style="font-size: 2rem; color: <?= $cc['color'] ?>;"><i class="<?= $cc['icon'] ?>"></i></div>
                                            <h6 class="mt-2 font-weight-bold mb-1"><?= $cc['label'] ?></h6>
                                            <p class="text-muted small mb-0" style="line-height: 1.2; height: 35px; overflow: hidden;"><?= $cc['desc'] ?></p>
                                        </div>

                                        <!-- Metrik Performa -->
                                        <?php if ($mVal !== null): ?>
                                        <div class="mb-3 flex-grow-1">
                                            <?php 
                                            $metricsList = [
                                                'Accuracy'  => $mVal['accuracy'] ?? 0,
                                                'Precision' => $mVal['precision'] ?? 0,
                                                'Recall'    => $mVal['recall'] ?? 0,
                                                'F1-Score'  => $mVal['f1'] ?? 0
                                            ];
                                            foreach($metricsList as $mName => $mScore):
                                                $barWidth = (int)$mScore;
                                                $barColor = $mScore >= 80 ? 'bg-success' : ($mScore >= 60 ? 'bg-warning' : 'bg-danger');
                                                $textColor = $mScore >= 80 ? '#28a745' : ($mScore >= 60 ? '#ffc107' : '#dc3545');
                                            ?>
                                            <div class="mb-2">
                                                <div class="d-flex justify-content-between align-items-center mb-1" style="font-size: 0.8em;">
                                                    <span class="font-weight-bold text-muted"><?= $mName ?></span>
                                                    <span class="font-weight-bold" style="color: <?= $textColor ?>;"><?= $mScore ?>%</span>
                                                </div>
                                                <div class="progress" style="height: 6px; border-radius: 3px;">
                                                    <div class="progress-bar <?= $barColor ?>" role="progressbar" style="width: <?= $barWidth ?>%;" aria-valuenow="<?= $barWidth ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <?php else: ?>
                                        <div class="mb-3 flex-grow-1 d-flex justify-content-center align-items-center text-muted small" style="min-height: 120px;">
                                            <div><i class="fas fa-spinner fa-spin mr-1"></i>Metrik belum tersedia</div>
                                        </div>
                                        <?php endif; ?>

                                        <div class="text-center mt-auto">
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
