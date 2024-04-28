<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoginModel;

class LoginController extends Controller
{
    public $dblogin;
    public $session;
    public function __construct()
    {
        helper('form');
        $this->dblogin = new LoginModel();
        $this->session = \Config\Services::session();
    }


    public function Authen()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $usertype = $this->request->getVar('usertype');

        $userdata = $this->dblogin->verifyUsername($username);
        if ($userdata) {
            if ($password == $userdata['password']) {

                if ($usertype == 'Customer' && $usertype == $userdata['usertype']) {
                    // echo "Welcome Customer";
                    $this->session->set('logged_customer', $userdata['c_id']);
                    return redirect()->to(base_url() . 'DashboardController/c_dashboard');
                } elseif ($usertype == 'Staff' && $usertype == $userdata['usertype']) {
                    // echo "Welcome Staff";
                    $this->session->set('logged_staff', $userdata['user_id']);
                    return redirect()->to(base_url() . 'DashboardController/E_dashboard');
                } elseif ($usertype == 'Administrator' && $usertype == $userdata['usertype']) {
                    echo "Welcome Administrator";
                    $this->session->set('logged_admin', $userdata['user_id']);
                    return redirect()->to(base_url() . 'DashboardController/dashboard');
                } else {
                    echo "Invalid usertype";
                    // $this->session->setTempdata('error', 'Sorry, your usertype is invalid!', 3);
                    // return redirect()->to(current_url());
                }
            } else {
                echo "Wrong Password";
                // $this->session->setTempdata('error', 'Sorry, your password in incorrect!', 3);
                // return redirect()->to(current_url());
            }
        } else {
            echo "Username doesnt exist";
            // $this->session->setTempdata('error', 'Sorry, your username does not exist!', 3);
            // return redirect()->to(current_url());
        }

        // print_r($username);
        // print_r($password);
        // print_r($usertype);
    }

    public function login()
    {
        return view("login/login");
    }

    public function logoutAdmin()
    {

        session()->remove('logged_admin');
        session()->destroy();

        return redirect()->to(base_url() . 'LandingController/landing');
    }
    public function logoutStaff()
    {

        session()->remove('logged_staff');
        session()->destroy();

        return redirect()->to(base_url() . 'LandingController/landing');
    }
    public function logoutcustomer()
    {

        session()->remove('logged_customer');
        session()->destroy();

        return redirect()->to(base_url() . 'LandingController/landing');
    }
}
