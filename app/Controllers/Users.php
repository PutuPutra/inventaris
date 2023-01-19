<?php
 
namespace App\Controllers;
 
use \Myth\Auth\Models\UserModel;
use \Myth\Auth\Password;
 
class Users extends BaseController
{
     
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->findAll();
        $data = [
            'users' => $users,
            'heading' => 'Manajemen Akun',
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
            'title' => 'Manajemen User'
        ];
        return view('admin/users/index', $data);
    }
 
    public function activate()
    {
        $userModel = new UserModel();
 
        $data = [ 
            'activate_hash' => null,
            'active' => $this->request->getVar('active') == '0' || '' ? '1' : '0',
        ];
        $userModel->update($this->request->getVar('id'), $data);        
 
        return redirect()->to(base_url('/users/index'));
 
    }
 
    public function changePassword($id = null)
    {
        if ($id==null) 
        {
            return redirect()->to(base_url('/users/index'));
        } else
        {
            $data = [            
                'id' => $id,
                'title' => 'Update Password',
            ];
            return view('users/set_password', $data);            
        }
    }
 
    public function setPassword()
    {
        $id = $this->request->getVar('id');
        $rules = [
            'password'     => 'required|strong_password',
            'pass_confirm' => 'required|matches[password]',
        ];
 
        if (! $this->validate($rules))
        {
            $data = [            
                'id' => $id,
                'title' => 'Update Password',
                'validation' => $this->validator,
            ];
 
            return view('users/set_password', $data);
        }
        else
        {
            $userModel = new UserModel();
            $data = [            
                'password_hash' => Password::hash($this->request->getVar('password')),
                'reset_hash' => null,
                'reset_at' => null,
                'reset_expires' => null,
            ];
            $userModel->update($this->request->getVar('id'), $data);  
 
            return redirect()->to(base_url('/users/index'));
        }
    }
}