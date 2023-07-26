<?php

namespace App\Models;

use CodeIgniter\Model;

class Lowongan extends Model
{
    protected $table            = 'lowongan';
    protected $primaryKey       = 'id_lowongan';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_lowongan', 'id_perusahaan','nama_lowongan', 'syarat_lowongan','deskripsi_lowongan', 'gaji'
    ];

    public function getLowongan($id = false){
        if($id === false) {
            return $this->findAll();
        }else {
            return $this->where('id_lowongan',$id)->first();
        }
    }

    public function getLowPer($id = false){
        if($id === false) {
            return $this->findAll();
        }else {
            return $this->where('id_perusahaan',$id)->first();
        }
    }

    public function getJoinPerusahaan(){
        $query = $this->db->table('lowongan')
        ->join('perusahaan', 'lowongan.id_perusahaan = perusahaan.id_perusahaan')
        ->get();
        return $query;
    }

    public function saveLowongan($data) {
        return $this->insert($data);
    }

    public function updateLowongan($id, $data) {
        return $this->update($id, $data);
    }

    public function deleteLowongan($id) {
        return $this->delete($id);
    }
}
