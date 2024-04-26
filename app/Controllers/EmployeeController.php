<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EmployeeModel;

class EmployeeController extends Controller
{
    public $dbemp;
    public function __construct()
    {
        helper('form');
        $this->dbemp = new EmployeeModel();
    }

    public function employee()
    {
        $admin = session()->get('logged_admin');
        $data['userdata'] = $this->dbemp->getLoggedInUserData($admin);
        $data['data_employee'] = $this->dbemp->getEmp();

        return view("employee/employee", $data);
    }

    public function addemployee()
    {
        $active = 0;
        $stop = $this->request->getVar('date_stop');

        if ($stop == null) {
            $active = 1;
        }

        $session = \CodeIgniter\Config\Services::session();

        $employee_id = $this->request->getVar('employee_id');
        $name_employee = $this->request->getVar('name_employee');
        $gender = $this->request->getVar('gender');
        $address = $this->request->getVar('address');
        $number = $this->request->getVar('number');
        $salary = $this->request->getVar('salary');
        $date_join = $this->request->getVar('date_join');
        $date_stop = $stop;
        $act = $active;

        $empdata = array(
            'employee_id' => $employee_id,
            'name_employee' => $name_employee,
            'gender' => $gender,
            'address' => $address,
            'number' => $number,
            'salary' => $salary,
            'date_join' => $date_join,
            'date_stop' => $date_stop,
            'active' => $act,
        );
        $status = $this->dbemp->addEmp($empdata);

        if (!$status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "EmployeeController/employee");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "EmployeeController/employee");
        }
    }
    public function addacc($accdata)
    {


        $session = \CodeIgniter\Config\Services::session();

        $usertype = $this->request->getVar('usertype');
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $employee_id = $this->request->getVar('employee_id');


        $data = array(
            'usertype' => $usertype,
            'username' => $username,
            'password' => $password,
            'employee_id' => $employee_id,



        );
        $status = $this->dbemp->addaccount($data, $accdata);

        if ($status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "EmployeeController/employee");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "EmployeeController/employee");
        }
    }

    public function editEmployee($empid)
    {
        $active = 0;
        $stop = $this->request->getVar('date_stop');

        if ($stop == null) {
            $active = 1;
        }

        $session = \CodeIgniter\Config\Services::session();


        $name_employee = $this->request->getVar('name_employee');
        $gender = $this->request->getVar('gender');
        $address = $this->request->getVar('address');
        $number = $this->request->getVar('number');
        $salary = $this->request->getVar('salary');
        $date_join = $this->request->getVar('date_join');
        $date_stop = $stop;
        $act = $active;

        $empdata = array(

            'name_employee' => $name_employee,
            'gender' => $gender,
            'address' => $address,
            'number' => $number,
            'salary' => $salary,
            'date_join' => $date_join,
            'date_stop' => $date_stop,
            'active' => $act,
        );
        $status = $this->dbemp->editEmp($empdata, $empid);

        if ($status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "EmployeeController/employee");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "EmployeeController/employee");
        }
    }
    public function delete($id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->dbemp->deleteEmp($id);
        $delete_model = $this->dbemp->deleteacc($id);


        if (!$delete && !$delete_model) {
            $session->setTempdata('success', 'Deleted Successfully!', 3);
            return redirect()->to(base_url() . "EmployeeController/employee");
        } else {
            $session->setTempdata('error', 'Was not Deleted!', 3);
            return redirect()->to(base_url() . "EmployeeController/employee");
        }
    }
}
