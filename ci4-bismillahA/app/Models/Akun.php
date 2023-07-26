<?php

namespace App\Models;

use CodeIgniter\Model;

class Akun extends Model
{
    protected $table            = 'akun';
    protected $primaryKey       = 'id_akun';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'email','password','level'
    ];

    protected $allowCallbacks = true;
    protected $beforeInsert   = ['hashPassword'];
    protected $beforeUpdate   = ['hashPassword'];
   
    protected function hashPassword(array $data) {
        if(isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }

    public function getAkun($id = false){
        if($id === false) {
            return $this->findAll();
        } else {
            return $this->where('id_akun',$id)->first();
        }
    }
    
    public function getAcc(){
        $query = $this->db->table('akun')
        ->select('id_akun')
        ->where('id_akun', '(select max(id_akun) from akun)', FALSE)
        ->get();
        $result = $query->getRowArray();
        return $result;
    }
    public function updateAkun($id, $data) {
        return $this->update($id, $data);
    }
}
