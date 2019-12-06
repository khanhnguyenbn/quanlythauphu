<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubcontractorModel;

class SubcontractorController extends Controller
{
    //

    public function getSubContractors(){
        return response() -> json(SubcontractorModel::get(), 200);
    }
}
