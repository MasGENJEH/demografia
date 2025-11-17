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
        $data['kartu_keluarga'] = $this->kartu_keluarga->orderBy('created_at', 'DESC')->paginate(10);
        $data['pager'] = $this->kartu_keluarga->pager;

        return view('kartu_keluarga/view_kk', $data);
    }

    public function new()
    {
        return view('kartu_keluarga/form_tambah');
    }

    public function create()
    {
        $data = $this->request->getPost();
        $this->kartu_keluarga->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(base_url('kartu-keluarga'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->kartu_keluarga->getWhere(['nomor_kk' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['kartu_keluarga'] = $query->getRow();

                return view('kartu_keluarga/form_edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        // $data = $this->request->getPost();

        $data = [
            'alamat' => $this->request->getVar('alamat'),
            'nomor_kk' => $this->request->getVar('nomor_kk'),
            'rt' => $this->request->getVar('rt'),
            'rw' => $this->request->getVar('rw'),
            'dusun' => $this->request->getVar('dusun'),
            'pendapatan' => $this->request->getVar('pendapatan'),
            'skala_rumah' => $this->request->getVar('skala_rumah'),
        ];
        unset($data['_method']);

        $this->kartu_keluarga->update($id, $data);

        return redirect()->to(base_url('kartu-keluarga'))->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $this->kartu_keluarga->where(['nomor_kk' => $id])->delete();

        return redirect()->to(base_url('kartu-keluarga'))->with('success', 'Data Berhasil Dihapus');
    }
}
