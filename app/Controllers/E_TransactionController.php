<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\E_TransactionModel;

class E_TransactionController extends Controller
{
    public $dbtrans;
    public function __construct()
    {
        helper('form');
        $this->dbtrans = new E_TransactionModel();
    }

    public function Transaction()
    {


     $data['data_transaction'] = $this->dbtrans->getTransac();
       

       return view("empacc/transactions/transaction",$data);
   
    }

    
}

?>