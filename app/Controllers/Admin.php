<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin extends BaseController
{
    public function account()
    {
        $data = [
            'heading' => 'Account',
            'sidebar1' => null,
            'sidebar2' => null,
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
        ];

        return view('admin/account', $data);
    }
    public function settings()
    {
        $data = [
            'heading' => 'Pengaturan',
            'sidebar1' => null,
            'sidebar2' => null,
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
        ];

        return view('admin/settings', $data);
    }

    public function login()
    {
        return view('auth/login');
    }
    // public function register()
    // {
    //     return view('formLogin/authRegister');
    // }
    public function forgot_password()
    {
        return view('formLogin/authforgotpassword');
    }
    public function dashboard()
    {

        return view('admin/dashboard');
    }



    public function prasarana()
    {

        return view('admin/prasarana');
    }

    public function users()
    {
        $users = new UsersModel();
        $files_users = $users->findAll();
        $data = [
            'files_users' => $files_users,
            'heading' => 'Users',
            'sidebar1' => null,
            'sidebar2' => null,
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
        ];
        return view('admin/account', $data);
    }
    public function tambahUsers()
    {
        $data = [
            'heading' => 'Tambah Data Users',
            'sidebar1' => null,
            'sidebar2' => null,
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
        ];
        return view('admin/tambahUsers', $data);
    }
    public function store()
    {
        $validate = $this->validate([
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'password_hash' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ]
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_komputer'));
            return redirect()->to('tambahUsers')->withInput();
        }
        $data = [
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password_hash' => $this->request->getPost('password_hash')
        ];
        //dd($data);
        $users = new UsersModel();
        $users->insert($data);

        return redirect()->to(base_url('users'));
    }
    public function deleted($id = false)
    {
        $users = new UsersModel();
        $users->delete($id);
        return redirect()->to(base_url('/users'));
    }
}
