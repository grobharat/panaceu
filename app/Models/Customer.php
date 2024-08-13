<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
 

    public function followUps()
    {
        return $this->hasMany(FollowUp::class);
    }


    public function customerDetails()
    {
        return $this->hasMany(CustomerDetail::class);
    }
    
    public function tehsil()
    {
        return $this->belongsTo(Tehsil::class, 'tehsil_id');
    }
}
