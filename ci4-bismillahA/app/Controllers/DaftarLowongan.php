<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DaftarLowongan as DaftarLowonganModel;
use App\Models\Lowongan as LowonganModel;
use App\Models\Pekerja as PekerjaModel;

class DaftarLowongan extends BaseController
{
    public function index()
    {
        $model = new DaftarLowonganModel();
        $modelLowongan = new LowonganModel();
        $modelPekerja = new PekerjaModel();
        $data = [
            'listLowongan' => $model->getDaftarLowongan(),
            'lowong' => $modelLowongan->getLowongan(),
            'pekerja' => $modelPekerja->getPekerja(),
            'lowongan' => $join = $modelLowongan->getJoinPerusahaan()->getResult()
        ];
        return view('Pages/DashboardPekerja', $data);
    }

    public function save() {
        $model = new DaftarLowonganModel();

        $data = [
            'tgl_daftar' => $this->request->getPost('tgl_daftar'), 
            'status' => 'Lamar'
        ];
        $model->saveDaftarLowongan($data);
        return redirect()->to('/indexDaftarLowongan');
    }

    public function edit($id) {
        $model = new DaftarLowonganModel();
        $modelLowongan = new LowonganModel();
        $modelPekerja = new PekerjaModel();

        $data = [
            'listLowongan' => $model->getDaftarLowongan($id),
            'lowong' => $modelLowongan->getLowongan($id),
            'pekerja' => $modelPekerja->getPekerja()
        ];
        $data2 = [
            'id_lowongan' => $id
        ];
        $model->save($data2);
        return view('Pages/DaftarLowongan', $data);
    }

    public function update($id) {
        $model = new DaftarLowonganModel();

        $data = [  
            'tgl_daftar' => $this->request->getPost('tgl_daftar'), 
            'status' => 'Lamar'
        ];
        $model->save($data);
        return view('pages/confirm');
    }
}
