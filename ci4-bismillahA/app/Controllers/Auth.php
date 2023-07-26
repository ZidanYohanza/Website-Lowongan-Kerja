<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Akun as AkunModel;
use App\Models\Pekerja as PekerjaModel;
use App\Models\Perusahaan as PerusahaanModel;
use App\Models\Lowongan as LowonganModel;

class Auth extends BaseController
{

    public function login(){
        return view('TampilanLogin');
    }

    public function register(){
        return view('TampilanPilihanSignUp');
    }

    public function index()
    {
        helper(['form']);

        $modelLowongan = new LowonganModel();
        $join = $modelLowongan->getJoinPerusahaan()->getResult();
        $data = [
            'lowongan' => $join
        ];
        
        if($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[6]|max_length[250]|valid_email',
                'password' => 'required|min_length[1]|max_length[32]|validateUser[email,password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Email or password don\'t match'
                ]
            ];

            if(!$this->validate($rules,$errors)) {
                $data['validation'] = $this->validator;
                return view('TampilanLogin',$data);
            }else {
                $model = new AkunModel();
                $datax = $model->getAkun();

                $user = $model->where('email',$this->request->getVar('email'))->first();

                $this->setUserSession($user);
                session()->setFlashData('success','Login Success!');

                foreach($datax as $usera){
                    if($this->request->getVar('email') == $usera['email']){
                        if($usera['level'] == 1){
                            session()->setFlashData('id_akun', $usera['id_akun']);
                            session()->setFlashData('email', $usera['email']);
                            session()->setFlashData('password', $usera['password']);
                            session()->setFlashData('level', $usera['level']);
                            return redirect()->to('indexPekerja');
                        }else if($usera['level'] == 2){
                            session()->setFlashData('id_akun', $usera['id_akun']);
                            return redirect()->to('indexPerusahaan');
                        }else if($usera['level'] == 3){
                            return redirect()->to('dashAdm');
                        }
                    }
                }
            }
        }
        return view('TampilanUtama',$data);
    }

    private function setUserSession($user) {
        $data = [
            'email' => $user['email'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    public function registerPekerja(){
        $data = [];
        helper(['form']);
        if($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[6]|max_length[250]|valid_email|is_unique[akun.email]',
                'password' => 'required|min_length[8]|max_length[32]',
                'password_confirm' => 'matches[password]'
            ];
            if(!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else {
                $modelAkun = new AkunModel();
                $modelPekerja = new PekerjaModel();

                $data1 = [
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                    'level' => 1
                ];
                $modelAkun->save($data1);

                $data2 = [
                    'id_akun' => $modelAkun->getAcc(),
                    'nama_pekerja' => $this->request->getVar('namaPekerja')
                ];
                $modelPekerja->save($data2);

                session()->setFlashData('success','Register Success!');
                return redirect()->to('/login');
            }
        }
        return view('TampilanSignUpPencariKerja',$data);
    }

    public function registerPerusahaan(){
        $data = [];
        helper(['form']);
        if($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[6]|max_length[250]|valid_email|is_unique[akun.email]',
                'password' => 'required|min_length[8]|max_length[32]',
                'password_confirm' => 'matches[password]',
            ];
            if(!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else {
                $modelAkun = new AkunModel();
                $modelPerusahaan = new PerusahaanModel();

                $data1 = [
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                    'level' => 2
                ];

                $modelAkun->save($data1);
                
                $data2 = [
                    'id_akun' => $modelAkun->getAcc(),
                    'nama_perusahaan' => $this->request->getVar('namaPerusahaan')
                ];

                $modelPerusahaan->save($data2);
                session()->setFlashData('success','Register Success!');
                return redirect()->to('/login');
            }
        }
        return view('TampilanSignUpPerusahaan',$data);
    }

    public function registerAdmin(){
        $data = [];
        helper(['form']);
        if($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[6]|max_length[250]|valid_email|is_unique[akun.email]',
                'password' => 'required|min_length[8]|max_length[32]',
                'password_confirm' => 'matches[password]',
            ];
            if(!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else {
                $modelAkun = new AkunModel();
                $modelAdmin = new AdminModel();

                $data1 = [
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                    'level' => 3
                ];
                
                $data2 = [
                    'nama_admin' => $this->request->getVar('namaAdmin')
                ];
                $modelAkun->save($data1);
                $modelAdmin->save($data2);

                session()->setFlashData('success','Register Success!');
                return redirect()->to('/login');
            }
        }
        return view('TampilanSignUpAdmin',$data);
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/');
    }

}
