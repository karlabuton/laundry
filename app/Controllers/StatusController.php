<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\StatusModel;
use App\Models\TransactionModel;
use App\Models\EmployeeModel;

class StatusController extends Controller
{
    public $dbstat;
    public $dbcustomer;
    public $dbemp;
    public function __construct()
    {
        helper('form');
        $this->dbstat = new StatusModel();
        $this->dbcustomer = new TransactionModel();
        $this->dbemp = new EmployeeModel();
    }

    public function status()
    {
        $admin = session()->get('logged_admin');
        $data['userdata'] = $this->dbstat->getLoggedInUserData($admin);
        $data['data_customer'] = $this->dbstat->getStat();
        $data['data_transaction'] = $this->dbstat->getStat();
        $data['data_employee'] = $this->dbemp->getEmp();
        $data['data_items'] = $this->dbstat->getItems();

        return view("status/status", $data);
    }

    public function editstatus($sid)
    {
        $session = \CodeIgniter\Config\Services::session();


        $req_status = $this->request->getVar('req_status');




        $empdata = array(

            'req_status' => $req_status,



        );
        $status = $this->dbstat->editstatus($empdata, $sid);

        if ($status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "StatusController/status");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "StatusController/status");
        }
    }
    public function Sendsms($Sid)
    {
        $admin = session()->get('logged_admin');
        $data['userdata'] = $this->dbstat->getLoggedInUserData($admin);
        $data['data_customer'] = $this->dbstat->getStats($Sid);
        $data['data_transaction'] = $this->dbcustomer->getTrans($Sid);
        $data['data_employee'] = $this->dbemp->getEmp();
        $data['data_items'] = $this->dbstat->getItems();

        return view("status/sms", $data);
    }
}
