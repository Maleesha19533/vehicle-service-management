<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicle extends Model
{
    protected $fillable = [
        'customer_id',
        'registration_no',
        'brand',
        'model',
        'year',
        'color',
        'engine_no',
        'chassis_no',
        'mileage',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}