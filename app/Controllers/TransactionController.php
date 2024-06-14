<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TransactionModel;
use App\Models\CustomerModel;
use App\Models\EmployeeModel;

class TransactionController extends Controller
{
    public $dbtrans;
    public $dbcustomer;
    public $dbemp;
    public function __construct()
    {
        helper('form');
        $this->dbtrans = new TransactionModel();
        $this->dbcustomer = new CustomerModel();
        $this->dbemp = new EmployeeModel();
    }

    public function Transaction()
    {
        $admin = session()->get('logged_admin');
        $data['userdata'] = $this->dbtrans->getLoggedInUserData($admin);
        $data['data_customer'] = $this->dbcustomer->getCustomer();
        $data['data_transaction'] = $this->dbtrans->getTransac();
        $data['data_employee'] = $this->dbemp->getEmp();
        $data['data_items'] = $this->dbtrans->getItems();


        return view("transactions/transaction", $data);
    }
    public function addtransaction()
    {


        $session = \CodeIgniter\Config\Services::session();

        $date = $this->request->getVar('date');
        $c_id = $this->request->getVar('c_id');
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
        $status = $this->dbtrans->addtrans($empdata);

        if ($status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "TransactionController/Transaction");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "TransactionController/Transaction");
        }
    }

    public function edittransaction($Tid)
    {


        $session = \CodeIgniter\Config\Services::session();

        $c_id = $this->request->getVar('c_id');
        $employee_id = $this->request->getVar('employee_id');
        $weight = $this->request->getVar('weight');
        $itemandslot_id = $this->request->getVar('itemandslot_id');
        $date = $this->request->getVar('date');



        $empdata = array(
            'c_id' => $c_id,
            'employee_id' => $employee_id,
            'weight' => $weight,
            'itemandslot_id' => $itemandslot_id,
            'date' => $date,



        );
        $status = $this->dbtrans->edittrans($empdata, $Tid);

        if ($status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "TransactionController/Transaction");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "TransactionController/Transaction");
        }
    }
    public function deletetrans($id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->dbtrans->deletetrans($id);

        if (!$delete) {
            $session->setTempdata('success', 'Deleted Successfully!', 3);
            return redirect()->to(base_url() . "TransactionController/Transaction");
        } else {
            $session->setTempdata('error', 'Was not Deleted!', 3);
            return redirect()->to(base_url() . "TransactionController/Transaction");
        }
    }
    public function accept($id)
    {
        $session = \CodeIgniter\Config\Services::session();



        $empdata = array(

            'req_status' => "accepted"

        );
        $status = $this->dbtrans->updatestat($empdata, $id);

        if ($status) {
            $session->setTempdata('success', 'Accepted Successfully!', 3);
            return redirect()->to(base_url() . "TransactionController/Transaction");
        } else {
            $session->setTempdata('error', 'Not Accepted! Try Again!', 3);
            return redirect()->to(base_url() . "TransactionController/Transaction");
        }
    }
}
