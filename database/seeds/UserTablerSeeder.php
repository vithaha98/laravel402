<?php
use App\Models\Users;
use Illuminate\Database\Seeder;

class UserTablerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,100) as $value){
            Users::create([
                'name' => $faker->userName,
                'email' => $faker->email,
                'password' => bcrypt('levietanh'),
                'dob'=> $faker->date()

            ]);
        }
        //
    }
}
