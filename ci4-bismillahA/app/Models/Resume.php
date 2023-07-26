<?php

namespace App\Models;

use CodeIgniter\Model;

class Resume extends Model
{
    protected $table            = 'resume';
    protected $primaryKey       = 'id_resume';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_resume', 'id_pencariKerja','ringkasan_diri', 'keahlian','pengalaman_kerja', 'riwayat_pendidikan'
    ];

    public function getResume($id = false){
        if($id === false) {
            return $this->findAll();
        }else {
            return $this->where('id_resume',$id)->first();
        }
    }

    public function saveResume($data) {
        return $this->insert($data);
    }

    public function updateResume($id, $data) {
        return $this->update($id, $data);
    }

    public function deleteResume($id) {
        return $this->delete($id);
    }
}
