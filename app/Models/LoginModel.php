<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{


    public function verifyUsername($username)
    {
        $builder = $this->db->table('user');
        $builder->select("user_id, usertype, password,c_id,employee_id");
        $builder->where('username', $username);
        $result = $builder->get();
        if (count($result->getResultArray()) == 1) {
            return $result->getRowArray();
        } else {
            return false;
        }
    }
}
