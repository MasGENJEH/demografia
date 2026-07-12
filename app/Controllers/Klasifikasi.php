<?php

namespace App\Controllers;

use App\Models\KartuKeluargaModel;
use App\Models\PendudukModel;

class Klasifikasi extends BaseController
{
    /**
     * Mapping method key → label tampilan
     */
    private array $methodLabels = [
        'decision_tree' => 'Decision Tree',
        'naive_bayes'   => 'Naive Bayes',
        'random_forest' => 'Random Forest',
        'rule_based'    => 'Rule-Based Expert System',
    ];

    public function index()
    {
        $kkModel       = new KartuKeluargaModel();
        $pendudukModel = new PendudukModel();

        // Baca metode yang dipilih user (default: decision_tree)
        $method = $this->request->getVar('method') ?? 'decision_tree';
        if (!array_key_exists($method, $this->methodLabels)) {
            $method = 'decision_tree';
        }

        // Mengambil seluruh data
        $allKk       = $kkModel->findAll();
        $allPenduduk = $pendudukModel->findAll();

        // Mengelompokkan penduduk berdasarkan nomor_kk
        $pendudukByKk = [];
        foreach ($allPenduduk as $p) {
            $pendudukByKk[$p->nomor_kk][] = $p;
        }

        $inputData = [];
        $viewData  = [];

        foreach ($allKk as $kk) {
            $nomor_kk = $kk->nomor_kk;
            $anggota  = $pendudukByKk[$nomor_kk] ?? [];

            $jumlahAnggota = count($anggota);

            // Skip KK yang tidak memiliki anggota sama sekali
            if ($jumlahAnggota === 0) {
                continue;
            }

            $pekerjaan   = 'Tidak Bekerja';
            $pendidikan  = 'Tidak Sekolah';
            $nama_kepala = null;
            $jenis_kelamin = 'Laki-laki';
            $status_perkawinan = 'Kawin';
            $tanggal_lahir = date('Y-m-d');

            // Cari anggota yang berstatus Kepala Keluarga
            foreach ($anggota as $p) {
                if (strtolower(trim($p->status_keluarga)) === 'kepala keluarga') {
                    $pekerjaan   = $p->pekerjaan;
                    $pendidikan  = $p->pendidikan_terakhir;
                    $nama_kepala = $p->nama_lengkap;
                    $jenis_kelamin = $p->jenis_kelamin;
                    $status_perkawinan = $p->status_perkawinan;
                    $tanggal_lahir = $p->tanggal_lahir;
                    break;
                }
            }

            // Jika hanya 1 anggota, tampilkan meski tidak berlabel Kepala Keluarga
            if ($nama_kepala === null && $jumlahAnggota === 1) {
                $pekerjaan   = $anggota[0]->pekerjaan;
                $pendidikan  = $anggota[0]->pendidikan_terakhir;
                $nama_kepala = $anggota[0]->nama_lengkap;
                $jenis_kelamin = $anggota[0]->jenis_kelamin;
                $status_perkawinan = $anggota[0]->status_perkawinan;
                $tanggal_lahir = $anggota[0]->tanggal_lahir;
            }

            // KK dengan banyak anggota tapi tidak ada Kepala Keluarga → lewati
            if ($nama_kepala === null) {
                continue;
            }

            // Hitung umur
            $tgl = new \DateTime($tanggal_lahir);
            $sekarang = new \DateTime('today');
            $umur = $tgl->diff($sekarang)->y;

            // Tanggungan = jumlah anggota - 1 (Kepala Keluarga tidak dihitung)
            // Jika hanya 1 anggota, tanggungan = 0
            $jumlah_tanggungan = max(0, $jumlahAnggota - 1);

            $inputData[] = [
                'id'         => $nomor_kk,
                'tanggungan' => $jumlah_tanggungan,
                'pekerjaan'  => $pekerjaan,
                'pendidikan' => $pendidikan,
                'umur'       => $umur,
                'jenis_kelamin' => $jenis_kelamin,
                'status_perkawinan' => $status_perkawinan,
            ];

            $viewData[$nomor_kk] = [
                'nomor_kk'    => $nomor_kk,
                'nama_kepala' => $nama_kepala,
                'tanggungan'  => $jumlah_tanggungan,
                'pekerjaan'   => $pekerjaan,
                'pendidikan'  => $pendidikan,
                'prediksi'    => 'Menunggu...',
            ];
        }

        $data = ['klasifikasi' => []];

        if (count($inputData) > 0) {
            $jsonInput = json_encode($inputData);

            // Simpan JSON ke file temporary untuk menghindari batasan panjang argumen CLI di Windows
            $tmpFile = tempnam(sys_get_temp_dir(), 'ml_data_');
            file_put_contents($tmpFile, $jsonInput);

            $pythonExec = 'python';
            $scriptPath = FCPATH . '../python/predict_economy.py';

            // Teruskan path file temporary dan metode ke python (hindari escapeshellcmd di Windows untuk path yang memiliki spasi)
            $command = escapeshellarg($pythonExec) 
                . ' ' . escapeshellarg($scriptPath)
                . ' ' . escapeshellarg($tmpFile)
                . ' ' . escapeshellarg($method);

            $output = shell_exec($command);

            // Hapus file temporary
            if (file_exists($tmpFile)) {
                unlink($tmpFile);
            }

            if ($output !== null) {
                $result = json_decode($output, true);
                if (json_last_error() !== JSON_ERROR_NONE) {
                    $data['error'] = 'Gagal parse JSON dari Python. Output: ' . htmlspecialchars($output) . ' | Command: ' . htmlspecialchars($command);
                } else if (isset($result['status']) && $result['status'] === 'success') {
                    foreach ($result['data'] as $predItem) {
                        if (isset($viewData[$predItem['id']])) {
                            $viewData[$predItem['id']]['prediksi'] = $predItem['prediksi'];
                        }
                    }
                    // Simpan info metrik dari Python
                    $data['metrics']     = $result['metrics']     ?? null;
                    $data['metrics_all'] = $result['metrics_all'] ?? [];
                } else {
                    $data['error'] = 'Gagal memproses hasil klasifikasi: ' . ($result['error'] ?? 'Unknown error');
                }
            } else {
                $data['error'] = 'Gagal menjalankan script Machine Learning.';
            }
        }

        $klasifikasi_array = array_values($viewData);

        // Fitur Filter Label
        $filter_label = $this->request->getVar('filter_label');
        if ($filter_label && in_array($filter_label, ['Mapan', 'Berkembang', 'Rentan'])) {
            $klasifikasi_array = array_filter($klasifikasi_array, function($row) use ($filter_label) {
                return strcasecmp($row['prediksi'], $filter_label) === 0;
            });
        }

        // Fitur Sorting (ASC/DESC)
        $sort  = $this->request->getVar('sort');
        $order = $this->request->getVar('order');
        if ($sort && in_array($order, ['asc', 'desc'])) {
            usort($klasifikasi_array, function ($a, $b) use ($sort, $order) {
                if ($a[$sort] == $b[$sort]) return 0;
                $res = ($a[$sort] < $b[$sort]) ? -1 : 1;
                return $order === 'asc' ? $res : -$res;
            });
        }

        // Kirim seluruh data untuk di-handle "Load More" di sisi client (JavaScript)
        $data['klasifikasi']   = $klasifikasi_array;
        $data['sort']          = $sort;
        $data['order']         = $order;
        $data['method']        = $method;
        $data['methodLabels']  = $this->methodLabels;
        $data['methodLabel']   = $this->methodLabels[$method];
        $data['filter_label']  = $filter_label;
        // Pastikan key metrics selalu ada meski Python tidak jalan
        $data['metrics']      = $data['metrics']     ?? null;
        $data['metrics_all']  = $data['metrics_all'] ?? [];

        return view('klasifikasi/index', $data);
    }
}
