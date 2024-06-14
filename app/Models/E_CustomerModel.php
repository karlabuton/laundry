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

    public function getLoggedStaffUserData($emp)
    {
        $builder = $this->db->query("
        SELECT 
        e.name_employee,
        u.employee_id
    FROM 
        user u
    left JOIN 
        employee e ON e.employee_id = u.employee_id
    Where u.employee_id = '$emp'");
        $result = $builder->getResult();


        return $result;
    }
}
