<?php

namespace App\Models;

use CodeIgniter\Model;

class E_CustomerModel extends Model
{
    

    public function getCustomer()
    {
        $builder = $this->db->table('customer')->select('*');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    

    public function addhousehold($data)
    {
        $this->db->table('tbl_household')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }



    

    public function deleteHousehold($id)
    {
        $builder = $this->db->table('tbl_household');
        $builder->delete(['household_id' => $id]);
    }
}