<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductStatus;

class ProductStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = ['best-sellers', 'new-arrivals', 'hot-sales'];

        foreach ($name as $status) {
            ProductStatus::create([
                'name' => $status,
            ]);
        }
    }
}
