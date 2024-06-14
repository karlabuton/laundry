<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DashboardModel;


class DashboardController extends Controller
{
  public $dbdash;
  public function __construct()
  {
    helper('form');
    $this->dbdash = new DashboardModel();
  }

  public function dashboard()
  {
    if (!(session()->has('logged_customer') || session()->has('logged_admin') || session()->has('logged_staff'))) {
      return redirect()->to(base_url() . "LoginController/login");
    }
    $admin = session()->get('logged_admin');
    $data['userdata'] = $this->dbdash->getLoggedInUserData($admin);
    $data['data_dash'] = $this->dbdash->getDash();
    $data['employee'] = $this->dbdash->employee();
    $data['customer'] = $this->dbdash->customer();
    $data['totalrequest'] = $this->dbdash->totalrequest();
    $data['totalpending'] = $this->dbdash->totalpending();
    $data['status'] = $this->dbdash->status();
    $data['totalincome'] = $this->dbdash->totalincome();



    return view("dashboard/admindashboard", $data);
  }
  public function c_dashboard()
  {
    if (!(session()->has('logged_customer') || session()->has('logged_admin') || session()->has('logged_staff'))) {
      return redirect()->to(base_url() . "LoginController/login");
    }
    $cust = session()->get('logged_customer');
    $data['userdata'] = $this->dbdash->getLoggedCustUserData($cust);
    $data['totalrequest'] = $this->dbdash->totalreqC($cust);
    $data['totalpending'] = $this->dbdash->totalCpending($cust);
    $data['status'] = $this->dbdash->statusC($cust);
    $data['totalincome'] = $this->dbdash->totalincomeC($cust);
    // print_r($data);
    return view("dashboard/custdashboard", $data);
  }
  public function E_dashboard()
  {
    if (!(session()->has('logged_customer') || session()->has('logged_admin') || session()->has('logged_staff'))) {
      return redirect()->to(base_url() . "LoginController/login");
    }
    $staff = session()->get('logged_staff');
    $data['userdata'] = $this->dbdash->getLoggedStaffUserData($staff);
    $data['data_dash'] = $this->dbdash->getDash();


    return view("dashboard/E_dashboard", $data);
  }
}
