<?php

namespace App\Controllers;

class KartuKeluarga extends BaseController
{
    public function index()
    {
        // 1. Ambil semua data dari PendudukModel
        // $db = \Config\Database::connect();
        $builder = $this->db->table('kartu_keluarga');
        $query = $builder->get();
        $data['kartu_keluarga'] = $query->getResult();

        // print_r($query->getResult());
        // 2. Load view daftar penduduk
        return view('kartu_keluarga/view_kk', $data);
    }
}
