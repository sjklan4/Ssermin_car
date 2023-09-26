<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_regist', function (Blueprint $table) {
            $table->integer('Certifi_num')->autoincrement();
            $table->integer('Seller_num')->nullable(); // 판매자 일련 번호 
            $table->integer('User_num')->nullable(); // 일반사용자 일련 번호
            $table->string('Certifi_numbering',1000);
            $table->timestamp('Send_time');//인증번호 발송시간
            $table->timestamp('Destory_time'); // 파기 시간
            $table->char('div_user',1); // 유저 구분 테이블 0: 일반 / 1: 딜러
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
