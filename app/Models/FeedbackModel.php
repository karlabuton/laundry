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
}
