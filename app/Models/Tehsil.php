<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tehsil extends Model
{
    // Table associated with the model
    protected $table = 'tehsils';

    // Fillable attributes
    protected $fillable = ['id', 'name', 'district_id'];

    // Define relationship with District model
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
}
