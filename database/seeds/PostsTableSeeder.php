<?php

use Illuminate\Database\Seeder;
use NewAgeIpsum;

require_once 'vendor/fzaninotto/faker/src/autoload.php';
// require_once 'vendor/fzaninotto/faker/src/Faker/Provider/NewAgeProvider.php';
require_once 'vendor/newage-ipsum-master/src/Generator.php';
require_once 'vendor/newage-ipsum-master/src/NewAgeProvider.php';


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // $faker = Faker\Factory::create();
        $faker = new Faker\Generator();

        $faker->addProvider(new NewAgeIpsum\NewAgeProvider($faker));
        $faker->addProvider(new Faker\Provider\en_US\Person($faker));
        $faker->addProvider(new Faker\Provider\en_US\Address($faker));
        $faker->addProvider(new Faker\Provider\Internet($faker));
        $faker->addProvider(new Faker\Provider\DateTime($faker));
        $faker->addProvider(new Faker\Provider\Base($faker));

        // $fakerNewAge->addProvider(new NewAgeIpsum\NewAgeProvider($fakerNewAge));


        for ($i = 0; $i < 100; $i++) {

            $post = new App\Models\Post();

            $post->title = $faker->sentence($nbWords = 4, $variableNbWords = true);
            $post->url = $faker->url;
            $post->content = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
            $post->created_by = $faker->numberBetween(1, 20);
            $post->created_at = $faker->dateTimeThisMonth($max = 'now', $timezone = date_default_timezone_get());
            $post->save();

        }
    }
}
