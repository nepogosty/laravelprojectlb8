<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->text('href',1000);
            $table->string('price',10);
            $table->string('bonuses',6)->nullable();
            $table->double('rating',5)->nullable();
            $table->string('SSD',20);
            $table->string('RAM',7);
            $table->text('image')->nullable();
            $table->string('code')->nullable();

            $table->integer('id_firm')->unsigned();
            $table->foreign('id_firm')->references('id_firm')->on('firms')->onDelete('cascade');

            $table->integer('id_cpu')->unsigned();
            $table->foreign('id_cpu')->references('id_cpu')->on('cpus');

            $table->integer('id_gc')->unsigned();
            $table->foreign('id_gc')->references('id_gc')->on('graphic_cards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laptops');
    }
}
