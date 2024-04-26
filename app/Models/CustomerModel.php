<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{


    public function getCustomer()
    {
        $builder = $this->db->table('customer')->select('*');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function addcust($data)
    {
        $this->db->table('customer')->insert($data);
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
    public function editcust($data, $Cid)
    {
        $builder = $this->db->table('customer')->where('c_id', $Cid);
        $builder->update($data);

        if ($this->db->affectedRows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function deletecust($id)
    {
        $builder = $this->db->table('customer');
        $builder->delete(['c_id' => $id]);
    }
    public function deleteacc($id)
    {
        $builder = $this->db->table('user');
        $builder->delete(['c_id' => $id]);
    }
    public function getLoggedInUserData($admin)
    {

        $query = $this->db->table('user')->select('*');
        $query->where('user_id', $admin);
        $result = $query->get()->getResult();

        return $result;
    }
}
