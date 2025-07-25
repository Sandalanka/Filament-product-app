<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
        'name',
        'description',
        'external_url'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'product_category_id');
    }

    public function typeAssignments()
    {
        return $this->morphMany(TypeAssignment::class, 'typeAssignment', 'type_assignment_type', 'type_assignment_id');
    }
}
