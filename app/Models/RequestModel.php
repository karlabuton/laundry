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
        r.req_status,
        i.item_avail,
        r.itemandslot_id,
        c.gender_c,
        c.address,
        c.phone,
        r.purpose
    FROM 
        request r
    LEFT JOIN 
        customer c ON c.c_id = r.c_id
    LEFT JOIN 
        employee e ON e.employee_id = r.employee_id
    LEFT JOIN 
        itemandslot i ON i.itemandslot_id = r.itemandslot_id
    WHERE 
        r.c_id = '$id' AND (r.req_status = 'complete' OR r.req_status ='released')");
        $result = $builder->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getpaypment($id)
    {
        $builder = $this->db->query("
        SELECT 
        c.name_customer, 
        r.weight, 
        i.item_avail, 
        r.total, 
        r.date,
        r.req_id,
        r.c_id,
        r.req_id,
        i.item_price,
        r.itemandslot_id,
        r.purpose

    FROM 
        request r
    left JOIN 
        customer c ON c.c_id = r.c_id
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
    public function updatereq($data, $c_id)
    {
        $this->db->table('request')
            ->where('c_id', $c_id)
            ->update($data);

        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }
    public function getTransactionsByDateRange($dateIn, $dateAt)
    {
        return $this->db->table('request')
            ->select('*')
            ->where('date >=', $dateIn)
            ->where('date <=', $dateAt)
            ->get()
            ->getResult();
    }

    public function getAllinfo($id)
    {
        $builder = $this->db->query("
        SELECT 
        c.name_customer, 
        r.weight, 
        i.item_avail, 
        i.item_price,
        r.total, 
        r.date,
        r.req_id,
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
        itemandslot i ON i.itemandslot_id = r.itemandslot_id
	where r.req_id = '$id'");
        $result = $builder->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }
}
