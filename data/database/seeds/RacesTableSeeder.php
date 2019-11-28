<?php

use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('races')->insert([
        [
           'name' => 'Dog',
           'classification' => 'mammal',
           'lifeSpan' => '10-13',
        ],
        [
           'name' => 'Ape',
           'classification' => 'mammal',
           'lifeSpan' => '50-55',
        ],
        [
           'name' => 'dolphin',
           'classification' => 'ceatace',
           'lifeSpan' => '10-15',
        ],
        [
           'name' => 'shark',
           'classification' => 'ovipar',
           'lifeSpan' => '18-22',
        ],
        [
           'name' => 'rhino',
           'classification' => 'mammal',
           'lifeSpan' => '30-33',
        ],
     ]);
    }
}
