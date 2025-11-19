<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->auth = new AuthModel();
    }

    public function index()
    {
    }

    public function login()
    {
        // return 'login';
        return view('auth/login_page');
    }

    public function loginProcess()
    {
        $data = $this->request->getPost();

        // // 1. Validasi Input (WAJIB)
        // if (!$this->validate([
        //     'email' => 'required|valid_email',
        //     'password' => 'required',
        // ])) {
        //     // Jika validasi gagal, kembali dengan error
        //     return redirect()->back()->withInput()->with('error', 'Masukkan email dan password yang valid.');
        // }
        // $user = $this->auth->where('email', $data['email'])->first();

        $query = $this->auth->getWhere(['email' => $data['email']]);
        $user = $query->getRow();

        if ($user) {
            if (password_verify($data['password'], $user->password)) {
                $params = ['id' => $user->id];
                session()->set($params);

                return redirect()->to(base_url());
            } else {
                return redirect()->back()->with('error', 'Password salah');
            }
        } else {
            return redirect()->back()->with('error', 'Email tidak ditemukan');
        }
    }
}