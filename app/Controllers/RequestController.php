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
        $data['data_customer'] = $this->dbreq->getReq($cust);
        $data['data_item'] = $this->dbreq->getItem();


        return view("customeracc/customer_req", $data);
    }

    public function addrequest()
    {
        $session = \CodeIgniter\Config\Services::session();


        $cust = session()->get('logged_customer');
        $c_id = $cust;
        $weight = $this->request->getVar('weight');
        $purpose = $this->request->getVar('purpose');
        $itemandslot_id = $this->request->getVar('itemandslot_id');




        $empdata = array(

            'c_id' => $c_id,
            'weight' => $weight,
            'purpose' => $purpose,
            'itemandslot_id' => $itemandslot_id,


        );
        $status = $this->dbreq->addreq($empdata);

        if ($status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "RequestController/customer_req");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "RequestController/customer_req");
        }
    }

    public function transaction()
    {
        $cust = session()->get('logged_customer');
        $data['userdata'] = $this->dbreq->getLoggedCustUserData($cust);
        $data['data_emp'] = $this->dbreq->getReq($cust);
        return view("customeracc/transaction", $data);
    }
    public function print_Ctrans()
    {
        $cust = session()->get('logged_customer');
        $data['userdata'] = $this->dbreq->getLoggedCustUserData($cust);
        $data['data_customer'] = $this->dbreq->getReq($cust);

        return view("customeracc/print_Ctrans", $data);
    }
}
