<?php

namespace App\Models;

use CodeIgniter\Model;

class C_StatusModel extends Model
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



    public function getStatus()
    {
        $builder = $this->db->query('
        SELECT 
        c.name_customer, 
        e.name_employee, 
        r.weight, 
        i.item_avail, 
        r.total, 
        r.date,
        r.employee_id,
        r.req_id,
        e.active,
        r.c_id,
        r.req_id,
        i.item_avail,
        r.itemandslot_id,
        c.phone,
        c.address,
        r.prio_num,
        r.req_status,
        c.gender_c

    FROM 
        request r
    left JOIN 
        customer c ON c.c_id = r.c_id
    left JOIN 
        employee e ON e.employee_id = r.employee_id
    left JOIN 
        itemandslot i ON i.itemandslot_id = r.itemandslot_id;');
        $result = $builder->getResult();

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
        u.user_id
    FROM 
        user u
    left JOIN 
        customer c ON c.c_id = u.c_id
    Where u.user_id = '$Cust'");
        $result = $builder->getResult();


        return $result;
    }
}
