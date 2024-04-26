<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\C_StatusModel;

class C_StatusController extends Controller
{
    public $dbstat;
    public function __construct()
    {
        helper('form');
        $this->dbstat = new C_StatusModel();
    }

    public function Status()
    {
        $cust = session()->get('logged_customer');
        $data['userdata'] = $this->dbstat->getLoggedCustUserData($cust);
        $data['data_customer'] = $this->dbstat->getStatus();
        return view("customeracc/status", $data);
    }

    public function transaction()
    {

        return view("customeracc/transaction");
    }
}
