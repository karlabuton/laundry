<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CustomerModel;

class CustomerController extends Controller
{
    public $dbcustomer;
    public function __construct()
    {
        helper('form');
        $this->dbcustomer = new CustomerModel();
    }

    public function customer()
    {

        $admin = session()->get('logged_admin');
        $data['userdata'] = $this->dbcustomer->getLoggedInUserData($admin);
        $data['data_customer'] = $this->dbcustomer->getCustomer();


        return view("customer/customer", $data);
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
        $status = $this->dbcustomer->addcust($empdata);

        if ($status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "CustomerController/customer");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "CustomerController/customer");
        }
    }
    public function addaccount($accdata)
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
        $status = $this->dbcustomer->addaccount($data, $accdata);

        if ($status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "CustomerController/customer");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "CustomerController/customer");
        }
    }

    public function editCustomer($Cid)
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
        $status = $this->dbcustomer->editcust($empdata, $Cid);

        if ($status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "CustomerController/customer");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "CustomerController/customer");
        }
    }

    public function deletecust($id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->dbcustomer->deletecust($id);
        $delete_model = $this->dbcustomer->deleteacc($id);

        if (!$delete && !$delete_model) {
            $session->setTempdata('success', 'Deleted Successfully!', 3);
            return redirect()->to(base_url() . "CustomerController/customer");
        } else {
            $session->setTempdata('error', 'Was not Deleted!', 3);
            return redirect()->to(base_url() . "CustomerController/customer");
        }
    }
}
