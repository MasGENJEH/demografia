<?php

namespace App\Models;

use CodeIgniter\Model;

class KartuKeluargaModel extends Model
{
    protected $table = 'kartu_keluarga';
    protected $primaryKey = 'nomor_kk';
    protected $returnType = 'object';
    protected $allowedFields = ['nomor_kk', 'alamat', 'rt', 'rw', 'dusun', 'pendapatan', 'skala_rumah'];
}
