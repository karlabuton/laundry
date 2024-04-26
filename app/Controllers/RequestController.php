<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RequestModel;

class RequestController extends Controller
{
    public $dbreq;
    public function __construct()
    {
        helper('form');
        $this->dbreq = new RequestModel();
    }

    public function customer_req()
    {
        $cust = session()->get('logged_customer');
        $data['userdata'] = $this->dbreq->getLoggedCustUserData($cust);
        $data['data_customer'] = $this->dbreq->getReq();
        $data['data_item'] = $this->dbreq->getItem();

        return view("customeracc/customer_req", $data);
    }

    public function addrequest()
    {
    }

    public function transaction()
    {
        $cust = session()->get('logged_customer');
        $data['userdata'] = $this->dbreq->getLoggedCustUserData($cust);
        $data['data_emp'] = $this->dbreq->getReq();
        return view("customeracc/transaction", $data);
    }
    public function print_Ctrans()
    {
        $data['data_emp'] = $this->dbreq->getReq();

        return view("report/print_Ctrans", $data);
    }
}
