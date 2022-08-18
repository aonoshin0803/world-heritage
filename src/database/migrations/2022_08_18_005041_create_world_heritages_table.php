<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorldHeritagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('world_heritages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('世界遺産名称');
            $table->text('text')->comment('世界遺産の概要');
            $table->string('top_image')->comment('世界遺産ページのトップに表示させる画像')->nullable();
            $table->string('map')->nullable();
            $table->integer('registration_year')->comment('登録年')->nullable();
            $table->json('registration_standard')->comment('登録基準')->nullable();
            $table->integer('display_flg')->comment('0:表示　1:非表示');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('world_heritages');
    }
}
