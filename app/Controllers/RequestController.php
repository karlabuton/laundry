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
        $data['data_items'] = $this->dbreq->getItem();

        return view("customeracc/customer_req", $data);
    }

    public function Payment()
    {
        $cust = session()->get('logged_customer');

        $data['userdata'] = $this->dbreq->getLoggedCustUserData($cust);
        $data['data_cust'] = $this->dbreq->getpaypment($cust);

        return view("customeracc/payment", $data);
    }

    public function addrequest()
    {
        $session = \CodeIgniter\Config\Services::session();
        $cust = session()->get('logged_customer');

        $data['userdata'] = $this->dbreq->getLoggedCustUserData($cust);

        $cust = session()->get('logged_customer');
        $c_id = $cust;
        $date = $this->request->getVar('date');
        $purpose = $this->request->getVar('laundry_type');
        $itemandslot_id = $this->request->getVar('itemandslot_id');
        $weight = $this->request->getVar('weight');
        $total = $this->request->getVar('total');

        $empdata = array(

            'date' => $date,
            'c_id' => $c_id,
            'purpose' => $purpose,
            'itemandslot_id' => $itemandslot_id,
            'weight' => $weight,
            'total' => $total,

        );
        $status = $this->dbreq->addreq($empdata);

        $data['data_cust'] = $this->dbreq->getAllinfo($status);

        return view("customeracc/payment", $data);

        // if ($status) {
        //     $session->setTempdata('success', 'Added Successfully!', 3);
        //     return redirect()->to(base_url() . "RequestController/payment");
        // } else {
        //     $session->setTempdata('error', 'Not Added! Try Again!', 3);
        //     return redirect()->to(base_url() . "RequestController/customer_req");
        // }
    }
    public function pay()
    {
        $session = \CodeIgniter\Config\Services::session();
        $cust = session()->get('logged_customer');

        $data['userdata'] = $this->dbreq->getLoggedCustUserData($cust);

        $cust = session()->get('logged_customer');
        $c_id = $cust;

        $total = $this->request->getVar('total');

        $empdata = array(


            'c_id' => $c_id,

            'total' => $total,

        );
        $status = $this->dbreq->updatereq($empdata, $c_id);


        if (!$status) {
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
    public function filter()
    {
        $data = [];


        // Get the submitted date range
        $dateIn = $this->request->getPost('date_in');
        $dateAt = $this->request->getPost('date_at');

        // Fetch transactions based on the date range
        $data['data_emp'] = $this->dbreq->getTransactionsByDateRange($dateIn, $dateAt);

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
