<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class colorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('colors')->insert([
            ['id'=>1,'name'=>'black'],
            ['id'=>2,'name'=>'white'],
            ['id'=>3,'name'=>'green'],
            ['id'=>4,'name'=>'red'],
        ]);
    }
}
