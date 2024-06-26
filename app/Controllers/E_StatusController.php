<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\StatusModel;
use App\Models\TransactionModel;
use App\Models\EmployeeModel;
use App\Models\DashboardModel;

class E_StatusController extends Controller
{
    public $dbstat;
    public $dbcustomer;
    public $dbemp;
    public $dbdash;
    public function __construct()
    {
        helper('form');
        $this->dbstat = new StatusModel();
        $this->dbcustomer = new TransactionModel();
        $this->dbemp = new EmployeeModel();
        $this->dbdash = new DashboardModel();
    }

    public function status()
    {
        $staff = session()->get('logged_staff');
        $data['userdata'] = $this->dbdash->getLoggedStaffUserData($staff);
        $data['data_customer'] = $this->dbstat->getStat();
        $data['data_transaction'] = $this->dbcustomer->getTransac();
        $data['data_employee'] = $this->dbemp->getEmp();
        $data['data_items'] = $this->dbstat->getItems();

        return view("empacc/status/status", $data);
    }
    public function editStatusview($Tid)
    {
        $admin = session()->get('logged_admin');
        $data['userdata'] = $this->dbstat->getLoggedInUserData($admin);
        $data['data_customer'] = $this->dbstat->getStats($Tid);
        $data['data_transaction'] = $this->dbcustomer->getTrans($Tid);
        $data['data_employee'] = $this->dbemp->getEmp();
        $data['data_items'] = $this->dbstat->getItems();

        return view("status/editstatus", $data);
    }
    public function editstatus($sid)
    {
        $session = \CodeIgniter\Config\Services::session();

        $c_id = $this->request->getVar('c_id');
        $employee_id = $this->request->getVar('employee_id');
        $weight = $this->request->getVar('weight');
        $total = $this->request->getVar('total');
        $itemandslot_id = $this->request->getVar('itemandslot_id');
        $date = $this->request->getVar('date');



        $empdata = array(
            'c_id' => $c_id,
            'employee_id' => $employee_id,
            'weight' => $weight,
            'total' => $total,
            'itemandslot_id' => $itemandslot_id,
            'date' => $date,


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
}
