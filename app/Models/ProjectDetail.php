<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Table associated with the model
    protected $table = 'project_details';

    // Fillable attributes
    protected $fillable = ['id', 'name', 'project_id'];

    // Define relationship with District model
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
