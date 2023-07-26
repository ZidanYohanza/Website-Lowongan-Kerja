<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Perusahaan as PerusahaanModel;
use App\Models\Lowongan as LowonganModel;
use App\Models\Akun as AkunModel;

class Perusahaan extends BaseController
{
    public function index()
    {
        $model = new PerusahaanModel();
        $modelLowongan = new LowonganModel();
        $join = $modelLowongan->getJoinPerusahaan()->getResult();
        $data = [
            'company' => $model->getPerusahaan(),
            'lowongan' => $join
        ];
        return view('Pages/DashboardPerusahaan', $data);
    }

    public function save() {
        $model = new PerusahaanModel();

        $file = $this->request->getFile('gambar_perusahaan');
        $namafile = $file->getRandomName();
        $file->move('img', $namafile);

        $data = [
            'nama_Perusahaan' => $this->request->getPost('nama_Perusahaan'), 
            'alamat_Perusahaan' => $this->request->getPost('alamat_Perusahaan'),
            'telepon_Perusahaan' => $this->request->getPost('telepon_Perusahaan'), 
            'pj_perusahaan' => $this->request->getPost('pj_perusahaan'),
            'gambar_perusahaan' => $namafile,
        ];
        $model->savePerusahaan($data);
        return redirect()->to('/indexPerusahaan');
    }

    public function edit($id) {
        $model = new PerusahaanModel();
        $modelAkun = new AkunModel();
        $data = [
            'company' => $model->getPerusahaan($id),
            'akun' => $modelAkun->getAkun($id)
        ];
        return view('pages/ProfilPerusahaan',$data);
    }

    public function update($id) {
        $model = new PerusahaanModel();
        $modelAkun = new AkunModel();
        $file = $this->request->getFile('gambar_perusahaan');
        $namafile = $file->getRandomName();
        $file->move('img', $namafile);

        $data = [
            'nama_perusahaan' => $this->request->getPost('nama_perusahaan'), 
            'alamat_perusahaan' => $this->request->getPost('alamat_perusahaan'),
            'telepon_perusahaan' => $this->request->getPost('telepon_perusahaan'),
            'pj_perusahaan' => $this->request->getPost('pj_perusahaan'), 
            'gambar_perusahaan' => $namafile
        ];
        $model->updatePerusahaan($id, $data);

        $data2 = [
            'email' => $this->request->getPost('email'), 
            'password' => $this->request->getPost('password')
        ];
        $modelAkun->updateAkun($id, $data2);
        return redirect()->to('/indexPerusahaan');
    }

    public function deletePer($id) {
        $model = new PerusahaanModel();
        $model->deletePerusahaan($id);
        return redirect()->to('/indexPerusahaan');
    }
}
