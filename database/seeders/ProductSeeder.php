<?php

namespace Database\Seeders;

use App\Models\{Category, Product};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		Product::factory()->count(200)->create();
    }
}
