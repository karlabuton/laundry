<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{


    public function getDash()
    {
        $builder = $this->db->table('employee')->select('*');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getCDash()
    {
        $builder = $this->db->table('employee')->select('*');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function employee()
    {
        $builder = $this->db->table('employee');
        $builder->selectCount('name_employee');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return 0;
        }
    }
    public function customer()
    {
        $builder = $this->db->table('customer');
        $builder->selectCount('name_customer');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return 0;
        }
    }
    public function totalrequest()
    {
        $builder = $this->db->table('request');
        $builder->selectCount('req_id');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return 0;
        }
    }
    public function totalpending()
    {
        $builder = $this->db->table('request');
        $builder->selectCount('req_id');
        $builder->where('req_status', 'pending');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return 0;
        }
    }
    public function status()
    {
        $builder = $this->db->table('request');
        $builder->selectCount('req_status');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return 0;
        }
    }
    public function totalincome()
    {
        $builder = $this->db->table('request');
        $builder->select('SUM(request.total) + COALESCE(SUM(itemandslot.item_price), 0) AS total_sum');
        $builder->join('itemandslot', 'itemandslot.itemandslot_id = request.itemandslot_id', 'left');
        $result = $builder->get()->getRowArray();



        return $result;
    }
    public function totalrequestC()
    {
        $builder = $this->db->table('request');
        $builder->selectCount('req_id');
        $builder->where('c_id', 'c_id');
        $result = $builder->countAllResults();

        return $result;
    }
    public function getLoggedInUserData($admin)
    {

        $query = $this->db->table('user')->select('*');
        $query->where('user_id', $admin);
        $result = $query->get()->getResult();

        return $result;
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
