<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'description',
        'image_source',
        'type_id',
        'status_id',
    ];

    public function types(): BelongsTo
    {
        return $this->belongsTo(ProductType::class, 'type_id');
    }

    public function statuses(): BelongsTo
    {
        return $this->belongsTo(ProductStatus::class, 'status_id');
    }
}
