<?php

namespace App\Models;

use CodeIgniter\Model;

class Item_slotModel extends Model
{



    public function getItemss($id)
    {
        $builder = $this->db->table('itemandslot')->select('*')
            ->where('itemandslot_id', $id);
        $result = $builder->get()->getResult();
        return $result;
    }
    public function getItem()
    {
        $builder = $this->db->table('itemandslot')->select('*');
        $result = $builder->get()->getResult();
        return $result;
    }
    public function additems($data)
    {
        $this->db->table('itemandslot')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }
    public function edititemslot($data, $id)
    {
        $builder = $this->db->table('itemandslot')->where('itemandslot_id', $id);
        $builder->update($data);

        if ($this->db->affectedRows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteitem($id)
    {
        $builder = $this->db->table('itemandslot');
        $builder->delete(['itemandslot_id' => $id]);
    }
    public function getLoggedInUserData($admin)
    {

        $query = $this->db->table('user');
        $query->where('user_id', $admin);
        $result = $query->get()->getResult();

        return $result;
    }
}
