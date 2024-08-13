<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    // Table associated with the model
    protected $table = 'states';

    // Fillable attributes
    protected $fillable = ['id', 'name', 'country_id'];

    // Define relationship with Country model
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    // Define relationship with District model
    public function districts()
    {
        return $this->hasMany(District::class, 'state_id');
    }
}
