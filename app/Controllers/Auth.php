<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login()
    {
        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $user = $this->userModel->where('email', $email)->first();

            if (!$user) {
                return redirect()->back()->with('error', 'User not found.');
            }

            if (!password_verify($password, $user['password'])) {
                return redirect()->back()->with('error', 'Wrong password.');
            }

            $this->setUserSession($user);

            return redirect()->to('/admin');
        }

        return view('auth/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    private function setUserSession($user)
    {
        $data = [
            'user_id' => $user['id'],
            'user_name' => $user['name'],
            'user_email' => $user['email'],
            'logged_in' => true,
        ];

        session()->set($data);
        return true;
    }
}
