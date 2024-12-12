<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker; 
use Illuminate\Support\Facades\DB; 

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            DB::table('sales')->insert([
                'medicine_id' => $faker->numberBetween(1, 10), 
                'quantity' => $faker->numberBetween(1, 10),
                'sale_date' => $faker->dateTimeBetween('-1 month', 'now'),
                'customer_phone' => $faker->phoneNumber(), 
            ]);
        }
    }
}
