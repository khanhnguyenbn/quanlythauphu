<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EmployeeModel;

class EmployeeController extends Controller
{
    //
    public function getEmployees(){
        return response() -> json(EmployeeModel::get(), 200);
    }
}
