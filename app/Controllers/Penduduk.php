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
        $data['penduduk'] = $this->penduduk->orderBy('created_at', 'DESC')->paginate(10);
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
        // $data = $this->request->getPost();
        $data = [
            'nik' => $this->request->getVar('nik'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nomor_kk' => $this->request->getVar('nomor_kk'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'status_keluarga' => $this->request->getVar('status_keluarga'),
            'pendidikan_terakhir' => $this->request->getVar('pendidikan_terakhir'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'status_perkawinan' => $this->request->getVar('status_perkawinan'),
        ];
        $this->penduduk->insert($data);
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(base_url('penduduk'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    // UPDATE (Tampilkan Form Edit Data)
    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->penduduk->getWhere(['nik' => $id]);
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
        // $data = $this->request->getPost();
        $data = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'status_keluarga' => $this->request->getVar('status_keluarga'),
            'pendidikan_terakhir' => $this->request->getVar('pendidikan_terakhir'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'status_perkawinan' => $this->request->getVar('status_perkawinan'),
        ];
        unset($data['_method']);

        $this->penduduk->update($id, $data);

        return redirect()->to(base_url('penduduk'))->with('success', 'Data Berhasil Diupdate');
    }

    // DELETE (Proses Hapus Data)
    public function delete($id)
    {
        $this->penduduk->where(['nik' => $id])->delete();

        return redirect()->to(base_url('penduduk'))->with('success', 'Data Berhasil Dihapus');
    }
}
