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
        Schema::create('seller_info', function (Blueprint $table) {
            $table->integer('Seller_num')->autoIncrement(); // 판매자 유저 일련 번호
            $table->string('Seller_ID',1000); // 판매자 아이디
            $table->string('password',1000); // 판매자 계정 비번
            $table->string('Seller_phone_num',1000); // 판매자 연락처
            $table->string('Seller_call_num',1000)->nullable(); //판매자 연락처2
            $table->string('Seller_ID_num',1000); // 판매 허가증 번호 - 중고차 판매자 등록번호
            $table->string('Buss_num',1000); //사업자 번호
            $table->integer('RegistCar_num')->nullable(); //등록된 판매차량 수
            $table->string('Remember_regi',1000); // 가입시 인증여부 - 가입자 허가 여부
            $table->integer('Contract_num')->nullable(); // 계약 건수 - 판매 건수
            $table->string('Sell_addres',1000); // 판매자 주소
            $table->delete('delflg');
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
