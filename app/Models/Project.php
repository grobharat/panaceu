<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Table associated with the model
    protected $table = 'projects';

    // Fillable attributes
    protected $fillable = ['id', 'name', 'tehsil_id'];

    // Define relationship with District model
    public function tehsil()
    {
        return $this->belongsTo(Tehsil::class, 'tehsil_id');
    }
}
