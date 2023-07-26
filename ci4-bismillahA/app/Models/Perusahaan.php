<?php

namespace App\Models;

use CodeIgniter\Model;

class Perusahaan extends Model
{
    protected $table            = 'perusahaan';
    protected $primaryKey       = 'id_perusahaan';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_akun', 'nama_perusahaan','alamat_perusahaan', 'telepon_perusahaan','pj_perusahaan', 'gambar_perusahaan'
    ];

    public function getPerusahaan($id = false){
        if($id === false) {
            return $this->findAll();
        }else {
            return $this->where('id_perusahaan',$id)->first();
        }
    }

    public function savePerusahaan($data) {
        return $this->insert($data);
    }

    public function updatePerusahaan($id, $data) {
        return $this->update($id, $data);
    }

    public function deletePerusahaan($id) {
        return $this->delete($id);
    }
}
