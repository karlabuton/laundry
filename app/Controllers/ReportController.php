<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ReportModel;

class ReportController extends Controller
{
    public $dbreport;
    public function __construct()
    {
        helper('form');
        $this->dbreport = new ReportModel();
    }


    public function report()
    {
        $admin = session()->get('logged_admin');
        $data['userdata'] = $this->dbreport->getLoggedInUserData($admin);
        $data['data_report'] = $this->dbreport->getReport();

        return view("report/report_employee", $data);
    }

    public function report_filter()
    {
        $admin = session()->get('logged_admin');
        $data['userdata'] = $this->dbreport->getLoggedInUserData($admin);
        $data['data_custfilter'] = $this->dbreport->getcustomer();
        // Retrieve GET parameters 
        $dateOne = $this->request->getVar('start_date');
        $dateTwo = $this->request->getVar('end_date');

        $startDate = date('Y-m-d', strtotime($dateOne));
        $endDate = date('Y-m-d', strtotime($dateTwo));

        $data['data_report'] = $this->dbreport->filter($startDate, $endDate);

        return view("report/employee_filter", $data);
    }

    public function print_emp($startDate = null, $endDate = null)
    {
        $data['startDate'] = $startDate;
        $data['endDate'] = $endDate;
        $data['data_report'] = $this->dbreport->filter($startDate, $endDate);

        return view("report/print_Etrans", $data);
    }

    public function report_customerfilter()
    {
        $admin = session()->get('logged_admin');
        $data['userdata'] = $this->dbreport->getLoggedInUserData($admin);
        $data['data_custfilter'] = $this->dbreport->getcustomer();
        // Retrieve GET parameters 
        $dateOne = $this->request->getVar('startDate');
        $dateTwo = $this->request->getVar('endDate');

        $startDate = date('Y-m-d', strtotime($dateOne));
        $endDate = date('Y-m-d', strtotime($dateTwo));
        // print_r($startDate);
        // print_r($endDate);
        $data['data_customer'] = $this->dbreport->Cfilter($startDate, $endDate);

        return view("report/report_cust", $data);
    }

    public function report_cust()
    {
        $admin = session()->get('logged_admin');
        $data['userdata'] = $this->dbreport->getLoggedInUserData($admin);
        $data['data_custfilter'] = $this->dbreport->getcustomer();
        $data['data_customer'] = $this->dbreport->getCReport();
        $data['req_status'] = ''; // Initialize req_status
        $data['c_id'] = ''; // Initialize c_id

        return view("report/report_cust", $data);
    }
    public function filterStatName()

    {


        $req_status = $this->request->getPost('req_status');
        $c_id = $this->request->getPost('c_id');
        $data['data_custfilter'] = $this->dbreport->getcustomer();

        $emp = $this->dbreport->getFilteredData($req_status, $c_id);


        if ($emp !== false) {
            $data['data_customer'] = $emp;
            $admin = session()->get('logged_admin');
            $data['userdata'] = $this->dbreport->getLoggedInUserData($admin);
            $data['req_status'] = $req_status;
            $data['c_id'] = $c_id;

            return view("report/report_cust", $data);
        } else {
            return redirect()->back()->with('error', 'No data found for the given criteria');
        }

        // $req_status = $this->request->getPost('req_status');
        // $c_id = $this->request->getPost('c_id');

        // $emp = $this->dbreport->getFilteredData($req_status, $c_id);

        // if ($emp !== false) {

        //     $data['data_customer'] = $emp;
        //     $admin = session()->get('logged_admin');
        //     $data['userdata'] = $this->dbreport->getLoggedInUserData($admin);
        //     $data['req_status'] = $req_status;
        //     $data['c_id'] = $c_id;



        //     return view("report/report_cust", $data);
        // } else {
        // Handle error, maybe return an error view or redirect
        // }
    }

    public function print_custtransaction($req_status = null, $c_id = null)
    {


        $data['req_status'] = $req_status;
        $data['c_id'] = $c_id;
        $data['data_customer'] = $this->dbreport->getFilteredData($req_status, $c_id);


        return view("customeracc/print_Ctrans", $data);
    }

    public function print_Ctrans($startDate = null, $endDate = null)
    {
        $data['startDate'] = $startDate;
        $data['endDate'] = $endDate;
        $data['data_customer'] = $this->dbreport->Cfilter($startDate, $endDate);

        return view("customeracc/print_Ctrans", $data);
    }
    public function print_Etrans()
    {

        $data['data_report'] = $this->dbreport->getReport();

        return view("report/print_Etrans", $data);
    }
}
