<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        $data['user'] = $this->user->orderBy('created_at', 'DESC')->paginate(10);
        $data['pager'] = $this->user->pager;

        return view('user/user_view', $data);
    }

    public function delete($id)
    {
        $this->user->where(['id' => $id])->delete();

        return redirect()->to(base_url('pengguna'))->with('success', 'Data Berhasil Dihapus');
    }
}