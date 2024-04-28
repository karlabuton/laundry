<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Item_slotModel;

class ItemandslotController extends Controller
{
    public $dbitems;
    public function __construct()
    {
        helper('form');
        $this->dbitems = new Item_slotModel();
    }


    public function items()
    {
        $admin = session()->get('logged_admin');
        $data['userdata'] = $this->dbitems->getLoggedInUserData($admin);
        $data['data_items'] = $this->dbitems->getItems();

        return view("itemandslot/itemandslot", $data);
    }
    public function additems()
    {


        $session = \CodeIgniter\Config\Services::session();

        $item_avail = $this->request->getVar('item_avail');
        $item_price = $this->request->getVar('item_price');


        $empdata = array(
            'item_avail' => $item_avail,
            'item_price' => $item_price,

        );
        $status = $this->dbitems->additems($empdata);

        if ($status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "ItemandslotController/items");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "ItemandslotController/items");
        }
    }

    public function editItems($Itemid)
    {


        $session = \CodeIgniter\Config\Services::session();


        $item_avail = $this->request->getVar('item_avail');
        $item_price = $this->request->getVar('item_price');


        $data = array(
            'item_avail' => $item_avail,
            'item_price' => $item_price,

        );

        $status = $this->dbitems->edititemslot($data, $Itemid);

        if ($status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "ItemandslotController/items");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "ItemandslotController/items");
        }
    }

    public function deleteitems($id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->dbitems->deleteitem($id);

        if (!$delete) {
            $session->setTempdata('success', 'Deleted Successfully!', 3);
            return redirect()->to(base_url() . "ItemandslotController/items");
        } else {
            $session->setTempdata('error', 'Was not Deleted!', 3);
            return redirect()->to(base_url() . "ItemandslotController/items");
        }
    }
}
