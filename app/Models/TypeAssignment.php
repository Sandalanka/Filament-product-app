<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TypeAssignment extends Model
{
    protected $fillable = [
        'type_assignment_type',
        'type_assignment_id',
        'type_id',
        'my_bonus_field'
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(ProductType::class, 'type_id');
    }

    public function typeAssignment(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'type_assignment_type', 'type_assignment_id');
    }

    
}
