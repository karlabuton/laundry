<?php

namespace App\Models;

use CodeIgniter\Model;

class LandingModel extends Model
{


    public function getFeed()
    {
        $builder = $this->db->query("
        SELECT 
        c.name_customer, 
        r.description
       

    FROM 
        tbl_feedback r
    left JOIN 
        customer c ON c.c_id = r.c_id");
        $result = $builder->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }
}
