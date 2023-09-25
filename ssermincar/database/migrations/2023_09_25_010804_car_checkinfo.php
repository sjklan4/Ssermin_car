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
        Schema::create('car_checkinfo', function (Blueprint $table) {
            $table->integer('Ch_num')->autoincrement();
            $table->integer('Car_num');
            $table->integer('Seller_num')->nullable(); // 판매자 일련 번호
            $table->foreign('Seller_num')->references('Seller_num')->on('seller_info'); //외래키 참조-판매자 테이블
            $table->integer('User_num')->nullable(); // 일반사용자 일련 번호
            $table->integer('User_num')->references('User_num')->on('user_info'); // 외래키 참조 - 일반유저 테이블
            $table->char('Check_cmp_num',1);
            $table->string('Check_link',1000);
            $table->date('Check_data');
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
