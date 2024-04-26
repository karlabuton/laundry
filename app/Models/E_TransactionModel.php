<?php

namespace App\Models;

use CodeIgniter\Model;

class E_TransactionModel extends Model
{
    

    public function getTransac()
    {
        $builder = $this->db->query('
        SELECT 
        c.name_customer, 
        e.name_employee, 
        r.weight, 
        i.item_avail, 
        r.total, 
        r.date,
        r.c_id,
        r.employee_id,
        r.req_id

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