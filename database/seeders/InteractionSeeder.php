<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InteractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $customer = CustomersSeeder::create(['name' => 'John Doe', 'email' => 'john@example.com']);
        $product = ProductSeeder::create(['name' => 'Sample Product']);

        
 DB::table('interaction')->insert([
            'customer_id' => $customer->id,
            'product_id' => $product->id,
            'interaction_type' => 'view',
            'rating' => null,
            
        ]);
        // InteractionSeeder::create([
        //     'customer_id' => $customer->id,
        //     'product_id' => $product->id,
        //     'interaction_type' => 'view',
        //     'rating' => null,
        // ]);
    }
}
