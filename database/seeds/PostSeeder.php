<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 100) as $item){
            \App\Models\Posts::create([
                'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
                'content' => $faker->text(200)
            ]);
        }
    }
}
