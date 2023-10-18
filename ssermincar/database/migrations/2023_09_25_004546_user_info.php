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
        Schema::create('user_info', function (Blueprint $table) {
            $table->bigIncrements('User_num'); // 회원 일련번호
            $table->string('User_ID', 100)->unique(); // 회원 ID
            $table->string('password', 100); // 회원 비밀번호
            $table->string('User_name', 1000); // 회원 이름
            $table->string('Phone_num', 100); // 회원 폰 번호
            $table->string('Tell_num', 100); // 회원 다른 연락처
            $table->string('User_address', 1000); // 회원 주소
            $table->string('User_email', 100); // 회원 이메일 주소 
            $table->string('Remember_token'); // 인증 여부 확인 (데이터 유형을 정수에서 문자열로 변경)
            $table->integer('Car_Sell_cnt')->nullable(); // 회원이 개인 판매 중인 차량 수
            $table->timestamp('last_used_at')->nullable(); // 마지막 접속 내용
            $table->timestamps();
            $table->softDeletes(); // 소프트 삭제를 위한 'deleted_at' 컬럼 생성
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
