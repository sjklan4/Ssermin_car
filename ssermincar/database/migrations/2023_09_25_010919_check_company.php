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
        Schema::create('check_company', function (Blueprint $table) {

            $table->bigIncrements('Com_num');
            $table->unsignedBigInteger('Ch_num');
            $table->foreign('Ch_num')->references('Ch_num')->on('car_checkinfo');
            $table->string('Com_name',1000); //검사 업체 명
            $table->string('Checker_name',100); //  검사자 명
            $table->timestamp('Perform_check_date')->nullable(); // 성능검사 일자
            $table->timestamp('Regulachk_date')->nullable(); // 정기검사 일자
            $table->timestamp('Next_regula_date')->nullable(); // 다음 정기 검사일자
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



