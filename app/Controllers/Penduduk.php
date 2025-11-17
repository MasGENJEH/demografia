<?php

namespace App\Controllers;

use App\Models\PendudukModel;

class Penduduk extends BaseController
{
    public function __construct()
    {
        $this->penduduk = new PendudukModel();
    }

    // READ (Tampilkan Daftar Data)
    public function index()
    {
        $data['penduduk'] = $this->penduduk->paginate(10);
        $data['pager'] = $this->penduduk->pager;

        return view('penduduk/view_penduduk', $data);
    }

    // CREATE (Tampilkan Form Tambah Data)
    public function new()
    {
        return view('penduduk/form_tambah');
    }

    // CREATE (Proses Simpan Data Baru)
    public function create()
    {
        // Validasi input
        $data = $this->request->getPost();
        $this->db->table('penduduk')->insert($data);
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(base_url('penduduk'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    // UPDATE (Tampilkan Form Edit Data)
    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('penduduk')->getWhere(['nik' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['penduduk'] = $query->getRow();

                return view('penduduk/form_edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    // UPDATE (Proses Perbarui Data)
    public function update($id)
    {
        $data = $this->request->getPost();
        unset($data['_method']);

        $this->db->table('penduduk')->where(['nik' => $id])->update($data);

        return redirect()->to(base_url('penduduk'))->with('success', 'Data Berhasil Diupdate');
    }

    // DELETE (Proses Hapus Data)
    public function delete($id)
    {
        $this->db->table('penduduk')->where(['nik' => $id])->delete();

        return redirect()->to(base_url('penduduk'))->with('success', 'Data Berhasil Dihapus');
    }
}
