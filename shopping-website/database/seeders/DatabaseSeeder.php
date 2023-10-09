<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        ProductCategory::factory()->create([
            'name' => 'Fashion'
        ]);
        ProductCategory::factory()->create([
            'name' => 'Electronics'
        ]);
        ProductCategory::factory()->create([
            'name' => 'Jewellery'
        ]);
        Product::factory(50)->create();
    }
}
