<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age')->comment('0:〜19歳 1:20代 2:30代 3:40代 4:50代 5:60代以上');
            $table->integer('gender')->comment('0:女性 1:男性 2:秘密');
            $table->string('profile_image')->nullable();
            $table->string('sub_image')->nullable();
            $table->text('text')->nullable();
            $table->integer('address')->comment('0:北海道 1:青森 2:岩手 3:宮城 4:秋田 5:山形 6:福島 7:茨城 8:栃木 9:群馬 10:埼玉 11:千葉 12:東京 13:神奈川 14:新潟 15:富山 16:石川 17:福井 18:長野 19:山梨 20:岐阜 21:静岡 22:愛知 23:三重 24:滋賀 25:和歌山 26:奈良 27:京都 28:大阪 29:兵庫 30:岡山 31鳥取 32:島根 33:広島 34:山口 35:香川 36:徳島 37:高知 38:愛媛 39:福岡 40:佐賀 41:長崎 42:大分 43:熊本 44:宮崎 45:鹿児島 46:沖縄 47:海外');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
