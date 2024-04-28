<?php

namespace App\Models;

use CodeIgniter\Model;

class LandingModel extends Model
{


    public function getFeed()
    {
        $builder = $this->db->table('tbl_feedback')->select('*');
        $result = $builder->get()->getResult();
        return $result;
    }
}
