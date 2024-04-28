<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SignupModel;


class SignupController extends Controller
{
    public $dbsign;
    public function __construct()
    {
        helper('form');
        $this->dbsign = new SignupModel();
    }

    public function signup()
    {

        return view("signup/signup");
    }
    public function createacc($id)
    {
        $data['create'] = $id;
        return view("signup/createacc", $data);
    }


    public function addcust()
    {


        $session = \CodeIgniter\Config\Services::session();

        $name_customer = $this->request->getVar('name_customer');
        $gender_c = $this->request->getVar('gender_c');
        $address = $this->request->getVar('address');
        $phone = $this->request->getVar('phone');


        $empdata = array(
            'name_customer' => $name_customer,
            'gender_c' => $gender_c,
            'address' => $address,
            'phone' => $phone,


        );

        $status = $this->dbsign->addcustomer($empdata);
        $data = $status;

        if ($status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "SignupController/createacc/$data");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "SignupController/signup");
        }
        // return view('signup/createacc', $data);
    }

    public function addaccount()
    {


        $session = \CodeIgniter\Config\Services::session();

        $usertype = $this->request->getVar('usertype');
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $c_id = $this->request->getVar('c_id');


        $data = array(
            'usertype' => $usertype,
            'username' => $username,
            'password' => $password,
            'c_id' => $c_id,




        );
        // print_r($username);
        // print_r($usertype);
        // print_r($password);
        // print_r($c_id);
        $status = $this->dbsign->addaccount($data);
        if ($status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "LoginController/login");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "SignupController/signup");
        }
    }
}
