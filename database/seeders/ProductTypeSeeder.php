<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductType;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = ['clothing', 'shoes', 'accessories', 'beauty', 'bags'];

        foreach ($name as $type) {
            ProductType::create([
                'name' => $type,
            ]);
        }
    }
}
