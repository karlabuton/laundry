<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FeedbackModel;
use App\Models\landingModel;

class FeedbackController extends Controller
{
    public $dbfeedback;
    public $dbsign;
    public function __construct()
    {
        helper('form');
        $this->dbfeedback = new FeedbackModel();
        $this->dbsign = new landingModel();
    }

    public function feedback()
    {
        $data['data_feedback'] = $this->dbsign->getFeed();
        return view("landing/service", $data);
    }
    public function feedbackcomment()
    {
        $cust = session()->get('logged_customer');
        $data['userdata'] = $this->dbfeedback->getLoggedCustUserData($cust);
        $data['data_cust'] = $this->dbfeedback->getCustname($cust);

        return view("customeracc/feedback", $data);
    }

    public function addfeedback()
    {
        $active = 0;
        $stop = $this->request->getVar('date_stop');

        if ($stop == null) {
            $active = 1;
        }

        $session = \CodeIgniter\Config\Services::session();
        $cust = session()->get('logged_customer');
        $c_id = $cust;

        $description = $this->request->getVar('description');


        $data = array(

            'c_id' => $c_id,
            'description' => $description,

        );
        $status = $this->dbfeedback->addfeed($data);

        if ($status) {
            $session->setTempdata('success', 'Added Successfully!', 3);
            return redirect()->to(base_url() . "FeedbackController/feedbackcomment");
        } else {
            $session->setTempdata('error', 'Not Added! Try Again!', 3);
            return redirect()->to(base_url() . "FeedbackController/feedbackcomment");
        }
    }
}
