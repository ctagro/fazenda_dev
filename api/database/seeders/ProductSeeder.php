<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    
    public function run()
    {
        Product::create([
            'description'         => 'Computador',
            'price'               => 1000,
            'stock'               => 4,
            ]);

        Product::create([
                'description'         => 'Mouse',
                'price'               => 100,
                'stock'               => 8,
                ]);

         Product::create([
                    'description'         => 'Teclado',
                    'price'               => 200,
                    'stock'               => 6,
                    ]);
                  
    }
}
