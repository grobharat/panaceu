<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessEntity extends Model
{
    use HasFactory;

    protected $table = 'business_entities';

    public function BusinessEntityDetails()
    {
        return $this->hasMany(BusinessEntityDetail::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    
}
