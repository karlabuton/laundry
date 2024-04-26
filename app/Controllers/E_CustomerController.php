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


     $data['data_customer'] = $this->dbcustomer->getCustomer();
       

       return view("empacc/customer/customer",$data);
   
    }

    
}

?>