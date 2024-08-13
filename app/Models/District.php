<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    // Table associated with the model
    protected $table = 'districts';

    // Fillable attributes
    protected $fillable = ['id', 'name', 'state_id'];

    // Define relationship with State model
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    // Define relationship with Tehsil model
    public function tehsils()
    {
        return $this->hasMany(Tehsil::class, 'district_id');
    }
}
