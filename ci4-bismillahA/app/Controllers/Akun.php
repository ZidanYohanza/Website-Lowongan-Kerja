<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Akun as AkunModel;

class Akun extends BaseController
{
    public function index()
    {
        $model = new AkunModel();
        $data = [
            'lakun' => $model->getAkun(),
        ];
        return view('Pages/Akun');
    }

    public function save() {
        $model = new AkunModel();

        $data = [
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];
        $model->saveAkun($data);
        return redirect()->to('/indexAkun');
    }

    public function edit($id) {
        $model = new AkunModel();
        $data = [
            'akun' => $model->getAkun(),
        ];
        return view('pages/Akun',$data);
    }

    public function update($id) {
        $model = new AkunModel();

        $data = [  
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];
        $model->updateAkun($id, $data);
        return redirect()->to('/indexAkun');
    }

    public function delete($id) {
        $model = new AkunModel();
        $model->deleteAkun($id);
        return redirect()->to('/indexAkun');
    }
}
