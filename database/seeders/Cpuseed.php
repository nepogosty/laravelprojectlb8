<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Cpuseed extends Seeder
{

    public function run()
    {
        DB::table('cpus')->insert([
            'id_cpu'=>1,
            'name' => 'Intel Core i5 11400H',
            'countCores' => 6,
            'frequency' => '',
        ]);

    }
}
