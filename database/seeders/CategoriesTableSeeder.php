<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $categories = ['Laravel', 'react', 'Java', 'c++'];

        foreach($categories as $category) {
            $newCategory = new Category();

            $newCategory->name = $category;
            $newCategory->description = $faker->sentence();

            $newCategory->save();
        }
    }
}
