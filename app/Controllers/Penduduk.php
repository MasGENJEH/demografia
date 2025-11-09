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

        // print_r($query->getResult());
        // 2. Load view daftar penduduk
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
            // code...
            return redirect()->to(base_url('penduduk'))->with('success', 'Data Berhasil Disimpan'); // ->with('success', 'Data Berhasil Disimpan')
        }
        // Simpan data baru ke database (menggunakan POST request)
        // Redirect ke index jika berhasil
    }

    // UPDATE (Tampilkan Form Edit Data)
    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('penduduk')->getWhere(['nik' => $id]);
            if ($query->resultID->num_rows > 0) {
                // code...
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
        // Ambil data dari form (menggunakan PUT/PATCH request)
        $data = $this->request->getPost();
        unset($data['_method']);
        // $data = [
        //     'nama_lengkap' => $this->request->getVar('nama_lengkap'),
        //     'nomor_kk' => $this->request->getVar('nomor_kk'),
        //     'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
        //     'status_keluarga' => $this->request->getVar('status_keluarga'),
        //     'pendidikan_terakhir' => $this->request->getVar('pendidikan_terakhir'),
        //     'pekerjaan' => $this->request->getVar('pekerjaan'),
        //     'status_perkawinan' => $this->request->getVar('status_perkawinan'),
        // ];

        // Perbarui data di database
        $this->db->table('penduduk')->where(['NIK' => $id])->update($data);

        return redirect()->to(base_url('penduduk'))->with('success', 'Data Berhasil Diupdate');

        // Redirect ke index jika berhasil
    }

    // DELETE (Proses Hapus Data)
    public function delete($id)
    {
        // Hapus data dari database (menggunakan DELETE request)
        // $data = $this->request->getPost();
        // unset($data['_method']);
        $this->db->table('penduduk')->where(['NIK' => $id])->delete();

        return redirect()->to(base_url('penduduk'))->with('success', 'Data Berhasil Dihapus');

        // Redirect ke index jika berhasil
    }
}
