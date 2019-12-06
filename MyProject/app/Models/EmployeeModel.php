<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    //

    protected $table = "employees";
    protected $fillable = [
        'id',
        'name',
        'date_of_birth',
        'phone_number',
        'address'
    ];
}
