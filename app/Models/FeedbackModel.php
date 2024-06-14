<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedbackModel extends Model
{


    public function addfeed($data)
    {
        $this->db->table('tbl_feedback')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }
    public function getLoggedCustUserData($Cust)
    {
        $builder = $this->db->query("
        SELECT 
        c.name_customer,
        u.c_id
    FROM 
        user u
    left JOIN 
        customer c ON c.c_id = u.c_id
    Where u.c_id = '$Cust'");
        $result = $builder->getResult();


        return $result;
    }
    public function getCustname($id)
    {
        $builder = $this->db->query("
        SELECT 
        c.name_customer, 
        r.description
       

    FROM 
        tbl_feedback r
    left JOIN 
        customer c ON c.c_id = r.c_id
	where r.c_id = '$id'");
        $result = $builder->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }
}
