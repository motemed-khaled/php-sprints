<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class sizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('sizes')->insert([
            ['id'=>1,'name'=>'small'],
            ['id'=>2,'name'=>'medium'],
            ['id'=>3,'name'=>'large'],
            ['id'=>4,'name'=>'x_large'],
        ]);
    }
}
