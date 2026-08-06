<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    protected $fillable = [
        'vehicle_id',
        'service_type',
        'description',
        'status',
        'service_date',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}