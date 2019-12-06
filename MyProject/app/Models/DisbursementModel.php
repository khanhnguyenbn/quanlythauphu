<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DisbursementModel extends Model
{
    //
    protected $table = "disbursement";
    protected $fillable = [
        'id',
        'subcontractor_id',
        'date_disbursement',
        'cash',
    ];
}
