<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello-world', function (Request $request){
    return response() -> json("Hello World!", 200);
});

Route::get('students', 'Student\StudentController@student');

Route::get('employees', 'EmployeeController@getEmployees');

Route::get('subcontractors', 'SubcontractorController@getSubcontractors');

Route::get('disbursements', 'DisbursementController@getDisbursements');

