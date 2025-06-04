<?php

namespace Database\Seeders;

use App\Models\technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\generator as Faker;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $technologies = [
            "PHP",
            "JavaScript",
            "Python",
            "Java",
            "C#",
            "C++",
            "TypeScript",
            "Ruby",
            "Go",
            "Swift",
            "Kotlin",
            "Rust",
            "Scala",
            "Dart",
            "Perl"
        ];

        foreach($technologies as $technology) {
            $newTechnology = new technology();
            $newTechnology->name = $technology;

            $newTechnology->save();
        }
    }
}
