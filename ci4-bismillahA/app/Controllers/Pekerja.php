<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pekerja as PekerjaModel;
use App\Models\Perusahaan as PerusahaanModel;
use App\Models\Lowongan as LowonganModel;
use App\Models\Akun as AkunModel;

class Pekerja extends BaseController
{
    public function index()
    {
        $model = new PekerjaModel();
        $modelLowongan = new LowonganModel();
        $join = $modelLowongan->getJoinPerusahaan()->getResult();
        $data = [
            'pekerja' => $model->getPekerja(),
            'lowongan' => $join
        ];
        return view('Pages/DashboardPekerja', $data);
    }

    public function save() {
        $model = new PekerjaModel();

        $file = $this->request->getFile('gambar_pekerja');
        $namafile = $file->getRandomName();
        $file->move('img', $namafile);

        $data = [
            'nama_pekerja' => $this->request->getPost('nama_pekerja'), 
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'no_hp' => $this->request->getPost('no_hp'), 
            'address' => $this->request->getPost('address'),
            'gambar_pekerja' => $namafile
        ];
        $model->savePekerja($data);
        return redirect()->to('/indexPekerja');
    }

    public function edit($id) {
        $model = new PekerjaModel();
        $modelAkun = new AkunModel();
        $data = [
            'pekerja' => $model->getPekerja($id)
        ];
        return view('pages/ProfilPekerja',$data);
    }

    public function update($id) {
        $model = new PekerjaModel();

        $file = $this->request->getFile('gambar_pekerja');
        $namafile = $file->getRandomName();
        $file->move('img', $namafile);

        $data = [
            
            'nama_pekerja' => $this->request->getPost('nama_pekerja'), 
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'no_hp' => $this->request->getPost('no_hp'), 
            'address' => $this->request->getPost('address'),
            'gambar_pekerja' => $namafile
        ];
        $model->updatePekerja($id, $data);
        return redirect()->to('/indexPekerja');
    }

    public function delete($id) {
        $model = new PekerjaModel();
        $model->deletePekerja($id);
        return redirect()->to('/indexPekerja');
    }
}
