<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStatus extends Model
{
    private static $name = ['best-sellers', 'new-arrivals', 'hot-sales'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
