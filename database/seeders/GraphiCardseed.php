<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GraphiCardseed extends Seeder
{

    public function run()
    {
        DB::table('graphic_cards')->insert([
            'id_gc'=>1,
            'name' => 'Nvidia GeForce RTX 3060 6GB',

        ]);
    }
}
