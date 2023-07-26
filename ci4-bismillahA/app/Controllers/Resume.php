<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Resume as ResumeModel;
use App\Models\Pekerja as PekerjaModel;
use App\Models\Lowongan as LowonganModel;

class Resume extends BaseController
{
    public function index()
    {
        $modelLowongan = new LowonganModel();
        $modelPekerja = new PekerjaModel();
        $join = $modelLowongan->getJoinPerusahaan()->getResult();
        $data = [
            'lowongan' => $join,
            'pekerja' => $modelPekerja->getPekerja()
        ];
        return view('Pages/DashboardPekerja', $data);
    }

    public function save() {
        $model = new ResumeModel();

        $data = [
            'ringkasan_diri' => $this->request->getPost('ringkasan_diri'), 
            'keahlian' => $this->request->getPost('keahlian'),
            'pengalaman_kerja' => $this->request->getPost('pengalaman_kerja'),
            'riwayat_pendidikan' => $this->request->getPost('riwayat_pendidikan')
        ];
        $model->saveResume($data);
        return redirect()->to('/indexResume');
    }

    public function edit($id) {
        $model = new ResumeModel();
        $modelPekerja = new PekerjaModel();
        $data = [
            'resume' => $model->getResume($id),
            'pekerja' => $modelPekerja->getPekerja($id)
        ];
        return view('Pages/Resume',$data);
    }

    public function update($id) {
        $model = new ResumeModel();

        $data = [  
            'id_pencariKerja' => $id,
            'ringkasan_diri' => $this->request->getPost('ringkasan_diri'), 
            'keahlian' => $this->request->getPost('keahlian'),
            'pengalaman_kerja' => $this->request->getPost('pengalaman_kerja'),
            'riwayat_pendidikan' => $this->request->getPost('riwayat_pendidikan')
        ];
        $model->save($data);
        return redirect()->to('/indexResume');
    }

    public function delete($id) {
        $model = new ResumeModel();
        $model->deleteResume($id);
        return redirect()->to('/indexResume');
    }
}
