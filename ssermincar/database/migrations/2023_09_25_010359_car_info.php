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
        Schema::create('car_info', function (Blueprint $table) {
            $table->integer('Car_num')->autoIncrement()->primary(); // 차량 일련번호
            $table->string('Car_identNum',100); //차대번호
            $table->string('Car_Registnum',500); // 차량 등록번호 - 차번호
            $table->string('Car_Name',1000); // 차량 이름
            $table->string('Car_Type',100); // 차종 - 소,중,대,특,전
            $table->integer('Car_CC'); // 차량 CC - 배기량
            $table->string('Car_electPower',1000)->nullable(); // 전기차 와트수 - 배터리 저장 공간기준
            $table->string('Car_wegith',1000); // 차량 톤수
            $table->integer('Car_km',1000); // 키로수
            $table->char('Car_enbgrade',1); // 환경등급
            $table->string('Car_imgadd',1000)->nullable(); // 이미지 저장 경로 저장 컬럼
            $table->char('Check_exgist',1)->default(0); // 진단검사 유무 - 0은 무 1은 진행완료
            $table->integer('Get_change_cnt'); // 소유주 변경 횟수
            $table->integer('Seller_num')->nullable(); // 판매자 일련 번호
            $table->integer('User_num')->nullable(); // 일반사용자 일련 번호

            $table->string('Car_color',500);
            $table->integer('Car_value');
            $table->string('Car_address',1000); // 차량이 있는 위치 - 판매장 주소 또는 차량 위치

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
