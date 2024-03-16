<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    private static $products = [
        [
            'name' => 'Hooded Thermal Anorak', 
            'price' => 67.24, 
            'description' => 'Coat with quilted lining and an adjustable hood. Featuring long sleeves with adjustable cuff tabs, adjustable asymmetric hem with elastic side tabs and a front zip fastening with placket.',
            'image_source' => 'product-4.jpg',
            'type_id' => 1,
            'status' => 'best-sellers'
        ],
        [
            'name' => 'Piqué Biker Jacket',
            'price' => 49.95,
            'description' => 'Piqué biker jacket with a lapel collar and long sleeves. Featuring front zip pockets, a chest pocket with a zip, shoulder tabs, an adjustable hem with snap-button tabs and a zip-up front.',
            'image_source' => 'product-2.jpg',
            'type_id' => 1,
            'status' => 'best-sellers'
        ],
        [
            'name' => 'Multi-pocket Chest Bag',
            'price' => 19.97,
            'description' => 'Multi-pocket chest bag with an adjustable strap. Featuring a zip-up front pocket, a zip-up back pocket, a zip-up main compartment and an adjustable strap with a clip fastening.',
            'image_source' => 'product-11.jpg',
            'type_id' => 5,
            'status' => 'new-arrivals'
        ],
        [
            'name' => 'Casual Sneakers',
            'price' => 29.37,
            'description' => 'Casual sneakers with a round toe and adjustable lace-up fastening. Featuring a pull tab at the back and a thick sole.',
            'image_source' => 'product-1.jpg',
            'type_id' => 2,
            'status' => 'hot-sales'
        ],
        [
            'name' => 'Ankle Shoes',
            'price' => 24.67,
            'description' => 'Ankle shoes with a round toe and adjustable lace-up fastening. Featuring a pull tab at the back and a thick sole.',
            'image_source' => 'product-3.jpg',
            'type_id' => 2,
            'status' => 'best-sellers'
        ],
        [
            'name' => 'T-shirt Contrast Pocket',
            'price' => 9.99,
            'description' => 'T-shirt with a round neckline and short sleeves. Featuring a contrast chest pocket and a side slit hem.',
            'image_source' => 'product-8.jpg',
            'type_id' => 1,
            'status' => 'hot-sales'
        ],
        [
            'name' => 'Basic Flowing Scarf',
            'price' => 12.89,
            'description' => 'Basic flowing scarf.',
            'image_source' => 'product-6.jpg',
            'type_id' => 3,
            'status' => 'new-arrivals'
        ],
        [
            'name' => 'Leather Backpack',
            'price' => 49.95,
            'description' => 'Leather backpack with a top handle and adjustable shoulder straps. Featuring a front zip pocket, a zip-up main compartment and an inner lining with a zip pocket.',
            'image_source' => 'product-7.jpg',
            'type_id' => 5,
            'status' => 'best-sellers'
        ],
        [
            'name' => 'Leather Handbag',
            'price' => 35.50,
            'description' => 'Leather handbag with a top handle and adjustable and detachable shoulder strap. Featuring a front pocket with a magnetic fastening, a zip-up main compartment and an inner lining with a zip pocket.',
            'image_source' => 'product-13.jpg',
            'type_id' => 5,
            'status' => 'hot-sales'
        ],
        [
            'name' => 'Golden Pilot Sunglasses',
            'price' => 19.99,
            'description' => 'Golden pilot sunglasses with a double bridge and adjustable nose pads.',
            'image_source' => 'product-14.jpg',
            'type_id' => 3,
            'status' => 'new-arrivals'
        ],
        [
            'name' => 'Hawaiian T-shirt',
            'price' => 12.99,
            'description' => 'Hawaiian T-shirt with a round neckline and short sleeves.',
            'image_source' => 'product-9.jpg',
            'type_id' => 1,
            'status' => 'best-sellers'
        ],
        [
            'name' => 'Casual T-shirt',
            'price' => 12.99,
            'description' => 'Casual T-shirt with a round neckline and short sleeves.',
            'image_source' => 'product-5.jpg',
            'type_id' => 1,
            'status' => 'hot-sales'
        ],
        [
            'name' => 'Camo Hoodie',
            'price' => 54.90,
            'description' => 'Camo hoodie with a round neckline and long sleeves. Featuring a front kangaroo pocket and a ribbed trim.',
            'image_source' => 'product-12.jpg',
            'type_id' => 1,
            'status' => 'new-arrivals'
        ],
        [
            'name' => 'Eau de Parfum',
            'price' => 19.99,
            'description' => 'Eau de parfum with a spray applicator.',
            'image_source' => 'product-10.jpg',
            'type_id' => 4,
            'status' => 'best-sellers'
        ]
    ];

    public static function displayProductsAtHome()
    {   
        return collect(self::$products)->take(8);
    }

    public function types(): BelongsTo
    {
        return $this->belongsTo(ProductType::class, 'type_id');
    }

    // public function statuses(): BelongsTo
    // {
    //     return $this->belongsTo(ProductStatus::class, 'status_id');
    // }
}
