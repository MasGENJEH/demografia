<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class LoginFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session('id')) {
            helper('cookie');
            $cookie = get_cookie('remember_me');
            if ($cookie) {
                $parts = explode('|', $cookie);
                if (count($parts) === 2) {
                    $userModel = new \App\Models\AuthModel();
                    $user = $userModel->find($parts[0]);
                    if ($user && hash('sha256', $user->password . 'demografia') === $parts[1]) {
                        $params = [
                            'id' => $user->id,
                            'username' => $user->username,
                            'email' => $user->email,
                            'role' => $user->role,
                        ];
                        session()->set($params);
                        return;
                    }
                }
            }
            return redirect()->to(base_url('auth/login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}