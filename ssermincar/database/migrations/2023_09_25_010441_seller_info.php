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
            $table->string('Seller_ID'); // 판매자 아이디
            $table->string('password'); // 판매자 계정 비번
            $table->string('Seller_phone_num'); // 판매자 연락처
            $table->string('Seller_call_num'); //판매자 연락처2
            $table->string('Sell_addres'); // 판매자 주소
            $table->string('Seller_ID_num'); // 판매 허가증 번호 - 중고차 판매자 등록번호
            $table->string('Buss_num'); //사업자 번호
            $table->integer('RegistCar_num')->nullable(); //등록된 판매차량 수
            $table->integer('Contract_num'); // 계약 건수 - 판매 건수

            $table->string('Remember_regi'); // 가입시 인증여부 - 가입자 허가 여부
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
`Seller_num`	int, autoincrement	NULL,
`Seller_ID`	varchar(100)	NOT NULL,
`Seller_pass`	varchar(1000)	NOT NULL,
`Seller_phone_num`	varchar(500)	NULL,
`Seller_call_num`	varchar(1000)	NULL,
`Seller_ID_num`	varchar(1000)	NOT NULL	COMMENT '판매허가증번호',
`Buss_num`	varchar(1000)	NOT NULL	COMMENT '사업자번호',
`RegistCar_num`	int	NULL	COMMENT '판매등록차량수',
`Remember_regi`	varchar(100)	NULL	COMMENT '가입인증여부확인',
`Contract_num`	int	NULL,
`Sell_addres`	varchar(1000)	NOT NULL	COMMENT '판매 업장 주소'