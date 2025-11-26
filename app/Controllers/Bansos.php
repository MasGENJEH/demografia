<?php

namespace App\Controllers;

use App\Models\KartuKeluargaModel;

class Bansos extends BaseController
{
    public function __construct()
    {
        $this->bansos = new KartuKeluargaModel();
    }

    public function index()
    {
        $data['kartu_keluarga'] = $this->bansos->orderBy('created_at', 'DESC')->paginate(10);
        $data['pager'] = $this->bansos->pager;

        return view('bansos/view_bansos', $data);
    }
}
