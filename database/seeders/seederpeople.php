<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class seederpeople extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i=0;$i<50;$i++)
       {
        DB::table('modelpeople')->insert([
            'name'=>Str::random(10),
            'lastname'=>Str::random(10),
            'phone_number'=>rand(100000000,999999999),
            'adress'=>Str::random(10),
            'city/country'=>Str::random(10)
        ]);
       }
    }
}
