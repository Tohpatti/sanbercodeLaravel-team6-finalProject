<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Maatwebsite\Excel\Facades\Excel;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $path = storage_path('app/Imports/products.xlsx');

        Excel::load($path, function ($reader) {
            dump("Inside Excel callback");
            $reader->each(function ($row) {
                Product::create([
                    'name' => $row->name,
                    'price' => $row->price,
                    'description' => $row->description,
                    'image_source' => $row->image_source,
                    'category_id' => $row->category_id,
                ]);
            });
        });

        dump("After loading Excel file");
    }
}
