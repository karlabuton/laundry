<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\E_CustomerModel;

class E_CustomerController extends Controller
{
    public $dbcustomer;
    public function __construct()
    {
        helper('form');
        $this->dbcustomer = new E_CustomerModel();
    }

    public function customer()
    {

        $staff = session()->get('logged_staff');
        $data['userdata'] = $this->dbcustomer->getLoggedStaffUserData($staff);
        $data['data_customer'] = $this->dbcustomer->getCustomer();


        return view("empacc/customer/customer", $data);
    }
}
