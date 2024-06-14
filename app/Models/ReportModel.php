<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportModel extends Model
{

    public function filter($startDate, $endDate)
    {
        $builder = $this->db->table('employee')
            ->where('date_join >=', $startDate)
            ->where('date_join <=', $endDate);

        $result = $builder->get()->getResult();

        if (!empty($result)) {
            return $result;
        } else {
            return [];
        }
    }

    public function Cfilter($startDate, $endDate)
    {
        $builder = $this->db->table('request r');
        $builder->select('c.name_customer, r.weight, i.item_avail, r.total, r.date, r.req_id, r.c_id, i.item_price, r.itemandslot_id, c.phone, c.address, r.req_status');
        $builder->join('customer c', 'c.c_id = r.c_id');
        $builder->join('itemandslot i', 'i.itemandslot_id = r.itemandslot_id');
        $builder->where('r.date >=', $startDate);
        $builder->where('r.date <=', $endDate);
        $builder->groupStart()
            ->where('r.req_status', 'completed')
            ->orWhere('r.req_status', 'released')
            ->groupEnd();

        $query = $builder->get();
        $result = $query->getResult();

        return !empty($result) ? $result : [];
    }


    public function getFilteredData($status, $c_id)
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
        r.prio_num,
        c.address

    FROM 
        request r
    left JOIN 
        customer c ON c.c_id = r.c_id
    left JOIN 
        employee e ON e.employee_id = r.employee_id
    left JOIN 
        itemandslot i ON i.itemandslot_id = r.itemandslot_id
 where r.req_status = '$status'OR r.c_id = '$c_id'
  AND (r.req_status = 'completed' OR r.req_status = 'released')");
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
        $builder = $this->db->query("
        SELECT 
        c.name_customer, 
        r.weight, 
        i.item_avail, 
        r.total, 
        r.date,
        r.req_id,
        r.c_id,
        i.item_price,
        r.itemandslot_id,
        c.phone,
        c.address,
        r.req_status
    FROM 
        request r
    LEFT JOIN 
        customer c ON c.c_id = r.c_id
    LEFT JOIN 
        itemandslot i ON i.itemandslot_id = r.itemandslot_id
    WHERE 
        r.req_status = 'completed' OR r.req_status = 'released'");
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
    public function getcustomer()
    {

        $query = $this->db->table('customer')->select('*');
        $result = $query->get()->getResult();

        return $result;
    }
}
