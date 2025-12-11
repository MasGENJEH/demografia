<?php

namespace App\Models;

use CodeIgniter\Model;

class KartuKeluargaModel extends Model
{
    protected $table = 'kartu_keluarga';
    protected $primaryKey = 'nomor_kk';
    protected $returnType = 'object';
    protected $allowedFields = ['nomor_kk', 'alamat', 'rt', 'rw', 'dusun', 'pendapatan', 'skala_rumah'];

    public function getTopRtByKK()
    {
        return $this->select('rt, COUNT(nomor_kk) as total_kk')
                    ->groupBy('rt')
                    ->orderBy('total_kk', 'DESC')
                    ->findAll(); // Mengambil semua hasil ranking RT
    }
}
