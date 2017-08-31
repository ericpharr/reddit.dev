<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

require_once 'vendor/fzaninotto/faker/src/autoload.php';

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $user = new App\User();

            $user->name = $faker->name;
            $user->email = $faker->freeEmail;
            $user->password = Hash::make(env('USER_SEED_PASSWORD'));
            $user->created_at = $faker->dateTime;
            $user->save();
        }
    }
}
