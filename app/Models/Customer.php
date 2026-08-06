<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_code',
        'full_name',
        'nic',
        'phone',
        'email',
        'address',
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}