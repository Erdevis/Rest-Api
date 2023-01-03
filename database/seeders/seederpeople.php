<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Modelpeople;
use Faker\Factory;


class seederpeople extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run(): void
//     {
//        for($i=0;$i<50;$i++)
//        {
//         DB::table('modelpeople')->insert([
//             'name'=>Str::random(10),
//             'lastname'=>Str::random(10),
//             'phone_number'=>rand(100000000,999999999),
//             'adress'=>Str::random(10),
//             'city/country'=>Str::random(10)
//         ]);
//        }
//     }
// }   





{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('modelpeoples')->delete();

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Modelpeople::create([
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'phone_number' => $faker->phoneNumber,
                'adress' => $faker->streetAddress,
                'city/country' => $faker->country
            ]);
        }
    }
}