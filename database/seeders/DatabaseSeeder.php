<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $categories = collect([
            ['name' => 'Elektronik', 'description' => 'Perangkat elektronik'],
            ['name' => 'Alat Tulis', 'description' => 'Perlengkapan tulis dan kantor'],
            ['name' => 'Aksesoris', 'description' => 'Aksesoris umum'],
        ])->map(fn ($data) => Category::create($data));

        foreach ($categories as $category) {
            Product::factory()->count(5)->create(['category_id' => $category->id]);
        }
    }
}
