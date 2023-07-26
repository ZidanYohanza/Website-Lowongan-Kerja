<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarLowongan extends Model
{
    protected $table            = 'daftar_lowongan';
    protected $primaryKey       = 'id_daftarLowongan';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_lowongan', 'id_pekerja','tgl_daftar', 'status'
    ];

    public function getDaftarLowongan($id = false){
        if($id === false) {
            return $this->findAll();
        }else {
            return $this->where('id_daftarLowongan',$id)->first();
        }
    }

    public function saveDaftarLowongan($data) {
        return $this->insert($data);
    }

    public function updateDaftarLowongan($id, $data) {
        return $this->update($id, $data);
    }

}
