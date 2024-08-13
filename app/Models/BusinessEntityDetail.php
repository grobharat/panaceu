<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessEntityDetail extends Model
{
    use HasFactory;

    protected $table = 'business_entity_details';   
    public function businessentity()
    {
        return $this->belongsTo(BusinessEntity::class, 'business_entity_id');
    }
}
