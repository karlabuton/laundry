<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\StatusModel;

class StatusController extends Controller
{
    public $dbstat;
    public function __construct()
    {
        helper('form');
        $this->dbstat = new StatusModel();
    }

    public function status()
    {
        $admin = session()->get('logged_admin');
        $data['userdata'] = $this->dbstat->getLoggedInUserData($admin);
        $data['data_customer'] = $this->dbstat->getStat();

        return view("status/status", $data);
    }
}
