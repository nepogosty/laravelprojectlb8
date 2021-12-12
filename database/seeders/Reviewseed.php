<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Reviewseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'id_reviews'=>1,
            'rating' => 5.0,
            'review'=>'Отличный игровой ноутбук. Причем игровой он не только потому, что клавиатура светится, если вы понимаете, о чем я. В связи с ценами, а также доступностью RTX видеокарт 30-й серий, ноутбуки становятся все более привлекательны для геймеров. Здесь стоит GeForce RTX 3060 6GB, ее с лихвой хватит на ближайшие пару лет. Оперативки 8 ГБ хватит, но можно расширить, если будет желание. Играл уже в Red Dead Redemption 2, Cyberpunk 2077, Танки (хотя не фанат, просто сделал пару пробитий), Microsoft Flight Simulator и другие графонистые или процессорозагружаемые игры. Все вывозит, тащит. Хороший ноутбук для игр.',
            'id_laptop'=>1,

        ]);
    }
}
