<?php

namespace App\Models;

use CodeIgniter\Model;

class SignupModel extends Model
{



    public function addCustomer($data)
    {
        $this->db->table('customer')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }

    public function addaccount($accdata)
    {
        $this->db->table('user')->insert($accdata);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }
}
