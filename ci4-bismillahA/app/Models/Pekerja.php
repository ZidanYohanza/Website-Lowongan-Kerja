<?php

namespace App\Models;

use CodeIgniter\Model;

class Pekerja extends Model
{
    protected $table            = 'pencari_kerja';
    protected $primaryKey       = 'id_pencariKerja';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_akun', 'nama_pekerja','jenis_kelamin', 'tgl_lahir','no_hp', 'address', 'gambar_pekerja'
    ];

    public function getPekerja($id = false){
        if($id === false) {
            return $this->findAll();
        }else {
            return $this->where('id_pencariKerja',$id)->first();
        }
    }

    public function savePekerja($data) {
        return $this->insert($data);
    }

    public function updatePekerja($id, $data) {
        return $this->update($id, $data);
    }

    public function deletePekerja($id) {
        return $this->delete($id);
    }
}
