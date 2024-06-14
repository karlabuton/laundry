<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{


    public function getTransac()
    {
        $builder = $this->db->query("
        SELECT 
        c.name_customer, 
        e.name_employee, 
        r.weight, 
        i.item_avail, 
        r.total, 
        r.date,
        r.employee_id,
        e.active,
        r.c_id,
        r.req_id,
        i.item_avail,
        i.item_price,
        r.itemandslot_id,
        r.purpose,
        r.prio_num,
        c.phone

    FROM 
        request r
    left JOIN 
        customer c ON c.c_id = r.c_id
    left JOIN 
        employee e ON e.employee_id = r.employee_id
    left JOIN 
        itemandslot i ON i.itemandslot_id = r.itemandslot_id
        where r.req_status = 'pending';");
        $result = $builder->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function getTrans($id)
    {
        $builder = $this->db->query("
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
        r.purpose

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


    public function addtrans($data)
    {
        $this->db->table('request')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }
    public function edittrans($data, $Tid)
    {
        $builder = $this->db->table('request')->where('req_id', $Tid);
        $builder->update($data);

        if ($this->db->affectedRows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function updatestat($data, $id)
    {
        $builder = $this->db->table('request')->where('req_id', $id);
        $builder->update($data);

        if ($this->db->affectedRows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function deletetrans($id)
    {
        $builder = $this->db->table('request');
        $builder->delete(['req_id' => $id]);
    }
    public function getLoggedInUserData($admin)
    {

        $query = $this->db->table('user')->select('*');
        $query->where('user_id', $admin);
        $result = $query->get()->getResult();

        return $result;
    }
}
