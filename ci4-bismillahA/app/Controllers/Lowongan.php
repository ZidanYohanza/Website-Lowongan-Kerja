<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Lowongan as LowonganModel;
use App\Models\Perusahaan as PerusahaanModel;

class Lowongan extends BaseController
{
    public function index()
    {
        $modelLowongan = new LowonganModel();
        $modelPerusahaan = new PerusahaanModel();
        $join = $modelLowongan->getJoinPerusahaan()->getResult();
        $data = [
            'lowongan' => $join,
            'company' => $modelPerusahaan->getPerusahaan()
        ];
        return view('Pages/DashboardPerusahaan', $data);
    }

    public function save() {
        $model = new LowonganModel();

        $data = [
            'nama_lowongan' => $this->request->getPost('nama_lowongan'), 
            'syarat_lowongan' => $this->request->getPost('syarat_lowongan'),
            'deskripsi_lowongan' => $this->request->getPost('deskripsi_lowongan'),
            'gaji' => $this->request->getPost('gaji')
        ];
        $model->saveLowongan($data);
        return redirect()->to('/indexLowongan');
    }

    public function edit($id) {
        $model = new LowonganModel();
        $modelPerusahaan = new PerusahaanModel();
        $data = [
            'lowongan' => $model->getLowongan($id),
            'company' => $modelPerusahaan->getPerusahaan($id)
        ];
        return view('pages/Lowongan',$data);
    }

    public function update($id) {
        $model = new LowonganModel();

        $data = [  
            'id_perusahaan' => $id,
            'nama_lowongan' => $this->request->getPost('nama_lowongan'), 
            'syarat_lowongan' => $this->request->getPost('syarat_lowongan'),
            'deskripsi_lowongan' => $this->request->getPost('deskripsi_lowongan'),
            'gaji' => $this->request->getPost('gaji')
        ];
        $model->save($data);
        return redirect()->to('/indexLowongan');
    }

    public function delete($id) {
        $model = new LowonganModel();
        $model->deleteLowongan($id);
        return redirect()->to('/indexLowongan');
    }
}
