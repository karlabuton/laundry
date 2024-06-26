<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusModel extends Model
{


    public function getStat()
    {
        $builder = $this->db->query("
        SELECT 
        c.name_customer, 
        r.req_status, 
        r.weight, 
        i.item_avail, 
        r.total, 
        r.date,
        r.c_id,
        r.employee_id,
        r.req_id,
        c.phone,
        e.active,
        i.itemandslot_id,
        r.prio_num

    FROM 
        request r
    left JOIN 
        customer c ON c.c_id = r.c_id
    left JOIN 
        employee e ON e.employee_id = r.employee_id
    left JOIN 
        itemandslot i ON i.itemandslot_id = r.itemandslot_id
        where r.req_status = 'accepted'OR r.req_status = 'progress' OR r.req_status = 'completed'");
        $result = $builder->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function getStats($id)
    {
        $builder = $this->db->query("
        SELECT 
        c.name_customer, 
        e.name_employee, 
        r.weight, 
        i.item_avail, 
        r.total, 
        r.date,
        r.c_id,
        r.employee_id,
        r.req_id,
        c.phone,
        e.active,
        i.itemandslot_id

    FROM 
        request r
    left JOIN 
        customer c ON c.c_id = r.c_id
    left JOIN 
        employee e ON e.employee_id = r.employee_id
    left JOIN 
        itemandslot i ON i.itemandslot_id = r.itemandslot_id
        where r.req_id = $id");
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

    public function editstatus($data, $Cid)
    {
        $builder = $this->db->table('request')->where('req_id', $Cid);
        $builder->update($data);

        if ($this->db->affectedRows() > 0) {
            return true;
        } else {
            return false;
        }
    }
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
}
