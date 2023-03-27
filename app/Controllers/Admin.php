<?php

namespace App\Controllers;

use App\Models\BukuModel;
use App\Models\MejaModel;
use App\Models\PenaModel;
use App\Models\KursiModel;
use App\Models\ModelKelas;
use App\Models\PialaModel;
use App\Models\UsersModel;
use App\Models\SpidolModel;
use App\Models\KomputerModel;
use App\Models\PenghapusModel;
use App\Models\PapanTulisModel;
use App\Controllers\BaseController;

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
            'submenu11' => null,
            'submenu12' => null,
            'submenu13' => null,
            'sub1' => null,
            'sub2' => null,
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
            'submenu11' => null,
            'submenu12' => null,
            'submenu13' => null,
            'sub1' => null,
            'sub2' => null,
        ];

        return view('admin/settings', $data);
    }

    public function login()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }
    public function forgot_password()
    {
        return view('formLogin/authforgotpassword');
    }
    public function dashboard()
    {
        $data = [
            'sidebar1' => 'open active',
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
            'submenu11' => null,
            'submenu12' => null,
            'submenu13' => null,
            'sub1' => null,
            'sub2' => null,
            'jumlah_kelas' => (new ModelKelas())->countAllResults(),
            'jumlah_meja' => (new MejaModel())->countAllResults(),
            'jumlah_kursi' => (new KursiModel())->countAllResults(),
            'jumlah_buku' => (new BukuModel())->countAllResults(),
            'jumlah_piala' => (new PialaModel())->countAllResults(),
            'jumlah_komputer' => (new KomputerModel())->countAllResults(),
            'jumlah_papan_tulis' => (new PapanTulisModel())->countAllResults(),
            'jumlah_bangunan' => (new PapanTulisModel())->countAllResults(),
            'jumlah_alat_tulis' => (new PenaModel())->countAllResults() + (new PenghapusModel())->countAllResults() + (new SpidolModel())->countAllResults(),
        ];

        return view('admin/dashboard', $data);
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
            'submenu11' => null,
            'submenu12' => null,
            'submenu13' => null,
            'sub1' => null,
            'sub2' => null,
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
            'submenu11' => null,
            'submenu12' => null,
            'submenu13' => null,
            'sub1' => null,
            'sub2' => null,
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
        $users->where('id', $id);
        $users->delete($id);
        return redirect()->to(base_url('akun'));
    }
}
