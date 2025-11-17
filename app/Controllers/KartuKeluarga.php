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

    public function new()
    {
        return view('kartu_keluarga/form_tambah');
    }

    public function create()
    {
        $data = $this->request->getPost();
        $this->db->table('kartu_keluarga')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(base_url('kartu-keluarga'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('kartu_keluarga')->getWhere(['nomor_kk' => $id]);
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
        $data = $this->request->getPost();
        unset($data['_method']);
        $this->db->table('kartu_keluarga')->where(['nomor_kk' => $id])->update($data);

        return redirect()->to(base_url('kartu-keluarga'))->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $this->db->table('kartu_keluarga')->where(['nomor_kk' => $id])->delete();

        return redirect()->to(base_url('kartu-keluarga'))->with('success', 'Data Berhasil Dihapus');
    }
}
