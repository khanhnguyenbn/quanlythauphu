<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubcontractorModel extends Model
{
    //
    protected $table = "subcontractors";
    protected $fillable = [
        'id',
        'management_id',
        'name_con',
        'name_per',
        'misstion',
        'start_date',
        'end_date',
        'description'
    ];
}
