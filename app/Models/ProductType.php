<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_types';

    protected $fillable = [
        'name',
        'api_unique_number'
    ];

    public function typeAssignments(): HasMany
    {
        return $this->hasMany(TypeAssignment::class, 'type_id');
    }
}
