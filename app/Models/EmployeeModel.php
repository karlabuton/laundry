<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{


    public function getEmp()
    {
        $builder = $this->db->table('employee')->select('*');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }



    public function addEmp($data)
    {
        $this->db->table('employee')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }
    public function addaccount($accdata)
    {
        $this->db->table('user')->insert($accdata);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }

    public function editEmp($data, $empid)
    {
        $builder = $this->db->table('employee')->where('employee_id', $empid);
        $builder->update($data);

        if ($this->db->affectedRows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteEmp($id)
    {
        $builder = $this->db->table('employee');
        $builder->delete(['employee_id' => $id]);
    }
    public function deleteacc($id)
    {
        $builder = $this->db->table('user');
        $builder->delete(['employee_id' => $id]);
    }
    public function getLoggedInUserData($admin)
    {

        $query = $this->db->table('user')->select('*');
        $query->where('user_id', $admin);
        $result = $query->get()->getResult();

        return $result;
    }
}
