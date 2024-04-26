<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\C_Vitem_slotModel;

class C_Vitems_slotController extends Controller
{
    public $dbview;
    public function __construct()
    {
        helper('form');
        $this->dbview = new C_Vitem_slotModel();
    }

    public function view_item()
    {
        $cust = session()->get('logged_customer');
        $data['userdata'] = $this->dbview->getLoggedCustUserData($cust);
        $data['data_customer'] = $this->dbview->getItems();
        return view("customeracc/item_slot", $data);
    }
}
