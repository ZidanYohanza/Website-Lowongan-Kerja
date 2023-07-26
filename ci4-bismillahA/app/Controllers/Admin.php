<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Admin as AdminModel;
use App\Models\Pekerja as PekerjaModel;
use App\Models\Perusahaan as PerusahaanModel;

class Admin extends BaseController
{
    public function index()
    {
        $model = new AdminModel();
        $modelPekerja = new PekerjaModel();
        $modelPerusahaan = new PerusahaanModel();
        $data = [
            'admin' => $model->getAdmin(),
            'pekerja' => $modelPekerja->getPekerja(),
            'perusahaan' => $modelPerusahaan->getPerusahaan()
        ];
        return view('Pages/Admin', $data);
    }

    public function save() {
        $model = new AdminModel();

        $data = [
            'nama_Admin' => $this->request->getPost('nama_Admin')
        ];
        $model->saveAdmin($data);
        return redirect()->to('/indexAdmin');
    }

    public function edit($id) {
        $model = new AdminModel();
        $modelPekerja = new PekerjaModel();
        $modelPerusahaan = new PerusahaanModel();
        $data = [
            'admin' => $model->getAdmin(),
            'pekerja' => $modelPekerja->getPekerja(),
            'perusahaan' => $modelPerusahaan->getPerusahaan()
        ];
        return view('pages/Admin',$data);
    }

    public function update($id) {
        $model = new AdminModel();

        $data = [  
            'nama_Admin' => $this->request->getPost('nama_Admin'), 
        ];
        $model->updateAdmin($id, $data);
        return redirect()->to('/indexAdmin');
    }

    public function delete($id) {
        $model = new AdminModel();
        $model->deleteAdmin($id);
        return redirect()->to('/indexAdmin');
    }
}
