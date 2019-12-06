<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisbursementModel;

class DisbursementController extends Controller
{
    //
    public function getDisbursements(){
        return response() -> json(DisbursementModel::get(), 200);
    }

}
