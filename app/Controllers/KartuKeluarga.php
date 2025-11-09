<?php

namespace App\Controllers;

use App\Models\KartuKeluargaModel;

class KartuKeluarga extends BaseController
{
    public function __construct()
    {
        $this->kartu_keluarga = new KartuKeluargaModel();
    }

    public function index()
    {
        $data['kartu_keluarga'] = $this->kartu_keluarga->paginate(10);
        $data['pager'] = $this->kartu_keluarga->pager;

        return view('kartu_keluarga/view_kk', $data);
    }
}
