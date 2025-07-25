<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'product_category_id',
        'product_color_id',
        'description'
    ];

   public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function color(): BelongsTo
    {
        return $this->belongsTo(ProductColor::class, 'product_color_id');
    }

    public function typeAssignments(): MorphMany
    {
        return $this->morphMany(TypeAssignment::class, 'typeAssignment', 'type_assignment_type', 'type_assignment_id');
    }
}
