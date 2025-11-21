<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        if (!session('id')) {
            return redirect()->to(base_url('auth/login'));
        }

        return view('home');
    }
}