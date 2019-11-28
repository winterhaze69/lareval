<?php

use Illuminate\Database\Seeder;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('animals')->insert([
        [
           'name' => 'coco',
           'description' => "man's best friend",
           'sex' => 'male',
           'age' =>  '7',
           'height' => '1,13',
           'weight' =>  '45',
           'race_id' =>  1,
        ],
        [
           'name' => 'mr.bigMonkey',
           'description' => "don't get to close",
           'sex' => 'male',
           'age' =>  '9',
           'height' =>  '1,55',
           'weight' =>  '80',
           'race_id' =>  2,
        ],
        [
           'name' => 'dolly',
           'description' => 'it can swim and it can jump',
           'sex' => 'female',
           'age' =>  '13',
           'height' =>  '1,28',
           'weight' =>  '37',
           'race_id' => 3,
        ],
        [
           'name' => 'shompa',
           'description' => 'you bleed, you die',
           'sex' => 'female',
           'age' =>  "16",
           'height' =>  '2,10',
           'weight' =>  '75',
           'race_id' =>  4,
        ],
        [
           'name' => 'wizz',
           'description' => 'not your friendly unicorn',
           'sex' => 'male',
           'age' =>  "26",
           'height' =>  '2,18',
           'weight' =>  '2750',
           'race_id' =>  5,
        ],

     ]);
    }
}
