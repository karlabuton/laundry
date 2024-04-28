<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestModel extends Model
{

    public function getReq($id)
    {
        $builder = $this->db->query("
        SELECT 
        c.name_customer, 
        e.name_employee, 
        e.gender,
        e.number,
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
        c.gender_c,
        c.address,
        c.phone,
        r.purpose

    FROM 
        request r
    left JOIN 
        customer c ON c.c_id = r.c_id
    left JOIN 
        employee e ON e.employee_id = r.employee_id
    left JOIN 
        itemandslot i ON i.itemandslot_id = r.itemandslot_id
	where r.c_id = '$id'");
        $result = $builder->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function filter($date_in, $date_at)
    {


        $builder = $this->db->query("SELECT * FROM employee 
    WHERE 
        (date_stop >= '$date_in' AND date_stop <= '$date_at') OR 
        (date_join <= '$date_at' AND date_stop = '0000-00-00') AND 
        active = 1;");
        $result = $builder->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getItem()
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
        u.user_id,
        u.c_id
    FROM 
        user u
    left JOIN 
        customer c ON c.c_id = u.c_id
    Where u.c_id = '$Cust'");
        $result = $builder->getResult();


        return $result;
    }
    public function addreq($data)
    {
        $this->db->table('request')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }
}
