<?php

use Illuminate\Database\Seeder;
use App\Costumers;
class CostumersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Costumers::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        for ($i = 0; $i < 50; $i++) {
            Costumers::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'document' => $faker->sentence,
            ]);
        }
    }
}
