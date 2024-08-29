<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if the table name is 'parameters')
    protected $table = 'parameters';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'name',
        'description',
        'type',
        'status',
    ];

    // Define any default attribute values
    protected $attributes = [
        'status' => 0,
    ];

    // Define the data type of each column (optional)
    protected $casts = [
        'status' => 'integer',
    ];

    // Define any relationships (if needed)
    // Example: if a parameter belongs to a customer
    // public function customer()
    // {
    //     return $this->belongsTo(Customer::class);
    // }

    // Define any custom methods (if needed)
    // Example: A method to check if the parameter is active
    public function isActive()
    {
        return $this->status === 1;
    }

        // Define the relationship with CustomerDetail
        public function CustomerDetails()
        {
            return $this->hasMany(CustomerDetail::class, 'parameter_id');
        }
}
