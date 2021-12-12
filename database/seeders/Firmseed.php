<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Firmseed extends Seeder
{

    public function run()
    {
        DB::table('firms')->insert([
            'id_firm'=>1,
            'name' => 'Acer',

        ]);
    }
}
