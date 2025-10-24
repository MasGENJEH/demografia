<?php

namespace App\Controllers;

class Penduduk extends BaseController
{
    // READ (Tampilkan Daftar Data)
    public function index()
    {
        // 1. Ambil semua data dari PendudukModel
        // $db = \Config\Database::connect();
        $builder = $this->db->table('data_penduduk');
        $query = $builder->get();
        $data['data_penduduk'] = $query->getResult();

        // print_r($query->getResult());
        // 2. Load view daftar penduduk
        return view('penduduk/view_penduduk', $data);
    }

    // CREATE (Tampilkan Form Tambah Data)
    public function new()
    {
        // Tampilkan form penambahan data
        return view('penduduk/form_tambah');
    }

    // CREATE (Proses Simpan Data Baru)
    public function create()
    {
        // Validasi input
        // Simpan data baru ke database (menggunakan POST request)
        // Redirect ke index jika berhasil
    }

    // UPDATE (Tampilkan Form Edit Data)
    public function edit($id = null)
    {
        // Ambil data penduduk berdasarkan $id
        // Tampilkan form edit data
        return view('penduduk/form_edit');
    }

    // UPDATE (Proses Perbarui Data)
    public function update($id = null)
    {
        // Ambil data dari form (menggunakan PUT/PATCH request)
        // Perbarui data di database
        // Redirect ke index jika berhasil
    }

    // DELETE (Proses Hapus Data)
    public function delete($id = null)
    {
        // Hapus data dari database (menggunakan DELETE request)
        // Redirect ke index jika berhasil
    }
}