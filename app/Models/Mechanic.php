<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    protected $fillable = [
        'employee_no',
        'full_name',
        'phone',
        'email',
        'specialization',
        'salary',
    ];
}