<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportModel extends Model
{


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
    public function getReport()
    {
        $builder = $this->db->table('employee')->select('*');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getCReport()
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
        c.phone

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

    public function getLoggedInUserData($admin)
    {

        $query = $this->db->table('user')->select('*');
        $query->where('user_id', $admin);
        $result = $query->get()->getResult();

        return $result;
    }
}
