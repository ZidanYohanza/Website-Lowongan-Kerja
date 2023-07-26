<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin extends Model
{
    protected $table            = 'admin';
    protected $primaryKey       = 'id_admin';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_admin', 'id_akun','nama_admin'
    ];

    public function getAdmin($id = false){
        if($id === false) {
            return $this->findAll();
        }else {
            return $this->where('id_admin',$id)->first();
        }
    }

    public function saveAdmin($data) {
        return $this->insert($data);
    }

    public function updateAdmin($id, $data) {
        return $this->update($id, $data);
    }

    public function deleteAdmin($id) {
        return $this->delete($id);
    }
}
