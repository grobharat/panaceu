<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    // Table associated with the model
    protected $table = 'countries';

    // Fillable attributes
    protected $fillable = ['id', 'name'];

    // Define relationship with State model
    public function states()
    {
        return $this->hasMany(State::class, 'country_id');
    }
}
