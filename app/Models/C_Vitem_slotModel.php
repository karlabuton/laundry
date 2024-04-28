<?php

namespace App\Models;

use CodeIgniter\Model;

class C_Vitem_slotModel extends Model
{


    public function getItems()
    {
        $builder = $this->db->table('itemandslot')->select('*');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function getLoggedCustUserData($Cust)
    {
        $builder = $this->db->query("
        SELECT 
        c.name_customer,
        u.c_id
    FROM 
        user u
    left JOIN 
        customer c ON c.c_id = u.c_id
    Where u.c_id = '$Cust'");
        $result = $builder->getResult();


        return $result;
    }
}
