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
            $table->bigIncrements('Ch_num');
            $table->foreign('Car_num')->references('Car_num')->on('Car_info'); //등록차량 순번
            $table->char('Check_cmp_num',1); // 인증업체 구분번호(0: 없음/ 1: 엔카 / 2: 차차....)
            $table->string('Check_link',1000)->nullable(); // 인증 차량 링크 
            $table->timestamp('Check_data'); // 인증일자
            $table->integer('Accident_num')->nullable(); //사고 건수
            $table->integer('Surface_repair_cnt')->nullable();//판금부위수- 판금수리횟수
            $table->integer('Insur_repair_cnt')->nullable();//보험수리 건수
            $table->integer('Simple_changeRep_cnt')->nullable(); // 단순교체 건수
            $table->softDeletes();
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
