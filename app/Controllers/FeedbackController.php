<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FeedbackModel;

class FeedbackController extends Controller
{
    public $dbfeedback;
    public function __construct()
    {
        helper('form');
        $this->dbfeedback = new FeedbackModel();
    }

    public function feedback()
    {

        return view("landing/service");
    }

    public function addfeedback()
    {
        $active = 0;
        $stop = $this->request->getVar('date_stop');

        if ($stop == null) {
            $active = 1;
        }

        $session = \CodeIgniter\Config\Services::session();

        $customer_name = $this->request->getVar('customer_name');
        $email = $this->request->getVar('email');
        $phone_number = $this->request->getVar('phone_number');
        $feedback_type = $this->request->getVar('feedback_type');
        $description = $this->request->getVar('description');


        $data = array(
            'customer_name' => $customer_name,
            'email' => $email,
            'phone_number' => $phone_number,
            'feedback_type' => $feedback_type,
            'description' => $description,

        );
        $status = $this->dbfeedback->addfeed($data);

        if (!$status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "LandingController/landingservice");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "LandingController/landingservice");
        }
    }
}
