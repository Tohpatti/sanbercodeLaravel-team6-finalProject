<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    private static $name = ['clothing', 'shoes', 'accessories', 'beauty', 'bags'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
