<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\PetCategory;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => 'testroot',
            ]
        );

        collect(["Mestizos", "Chihuahua"])->each(function($category) {
            PetCategory::firstOrCreate(['name' => $category]); 
        });

        Category::firstOrCreate(['name' => 'Categoria padre']);
    }
}
