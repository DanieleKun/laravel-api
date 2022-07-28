<?php

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = ['uncategorized', 'Sport', 'Games', 'Animali', 'BlackHumor', 'Viaggi'];

        foreach($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Category::getSlug($category),
                'description' => $faker->paragraphs(rand(2, 8), true),
            ]);
        }
    }
}
