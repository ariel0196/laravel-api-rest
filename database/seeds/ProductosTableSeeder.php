<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	Producto::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Producto::create([
                'nombre' => $faker->name,
                'precio' => $faker->numberBetween(1000, 100000),
                'cantidad' => $faker->numberBetween(1, 100),
            ]);
        }
    }
}
