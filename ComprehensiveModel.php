<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComprehensiveModel extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'string_field',
        'text_field',
        'integer_field',
        'float_field',
        'decimal_field',
        'boolean_field',
        'date_field',
        'datetime_field',
        'time_field',
        'json_field',
        'binary_field',
        'enum_field',
        'ip_address_field',
        'mac_address_field',
        'uuid_field',
        'foreign_key_field',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'string_field' => 'string',
        'text_field' => 'string',
        'integer_field' => 'integer',
        'float_field' => 'float',
        'decimal_field' => 'decimal:2',
        'boolean_field' => 'boolean',
        'date_field' => 'date',
        'datetime_field' => 'datetime',
        'time_field' => 'time',
        'json_field' => 'array',
        'binary_field' => 'binary',
        'enum_field' => 'string',
        'ip_address_field' => 'string',
        'mac_address_field' => 'string',
        'uuid_field' => 'string',
        'foreign_key_field' => 'integer',
    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['relatedModel'];

    /**
     * Define a one-to-one relationship.
     */
    public function relatedModel()
    {
        return $this->hasOne(RelatedModel::class);
    }

    /**
     * Define a one-to-many relationship.
     */
    public function relatedModels()
    {
        return $this->hasMany(RelatedModel::class);
    }

    /**
     * Define a many-to-many relationship.
     */
    public function relatedModelsMany()
    {
        return $this->belongsToMany(RelatedModel::class);
    }

    /**
     * Define a polymorphic relationship.
     */
    public function imageable()
    {
        return $this->morphTo();
    }

    /**
     * Define a custom attribute.
     */
    protected $appends = ['custom_attribute'];

    /**
     * Get the custom attribute.
     */
    public function getCustomAttribute()
    {
        return $this->attributes['string_field'] . ' ' . $this->attributes['integer_field'];
    }

    /**
     * Scope a query to only include active records.
     */
    public function scopeActive($query)
    {
        return $query->where('boolean_field', true);
    }

    /**
     * Perform any actions required after the model boots.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid_field = (string) \Illuminate\Support\Str::uuid();
        });
    }
}
