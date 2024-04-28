<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SignupModel;


class LandingController extends Controller
{
    public $dbsign;
    public function __construct()
    {
        helper('form');
        $this->dbsign = new SignupModel();
    }

    public function landing()
    {

        return view("landing/index");
    }
    public function landingabout()
    {

        return view("landing/about");
    }
    public function landingblog()
    {

        return view("landing/blog");
    }
    public function landingcontact()
    {

        return view("landing/contact");
    }
    public function landingpricing()
    {

        return view("landing/pricing");
    }
    public function landingservice()
    {

        return view("landing/service");
    }
    public function landingsingle()
    {

        return view("landing/single");
    }
}
