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

        $date_in = $this->dbreport->post('date_in');
        $date_at = $this->dbreport->post('date_at');

        $emp = $this->dbreport->filter($date_in, $date_at);
        $data_emp['data_emp'] = $emp;


        return view("report/report_employee", $data_emp);
    }

    public function report_cust()
    {
        $admin = session()->get('logged_admin');
        $data['userdata'] = $this->dbreport->getLoggedInUserData($admin);
        $data['data_customer'] = $this->dbreport->getCReport();

        return view("report/report_cust", $data);
    }

    public function print_Ctrans()
    {
        $data['data_customer'] = $this->dbreport->getCReport();

        return view("customeracc/print_Ctrans", $data);
    }
    public function print_Etrans()
    {

        $data['data_report'] = $this->dbreport->getReport();

        return view("report/print_Etrans", $data);
    }
}
