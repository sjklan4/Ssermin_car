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
            $table->integer('User_num')->autoIncrement()->primary(); //회원 일련번호
            $table->string('User_ID',100)->unique(); //회원 ID
            $table->string('password', 100); // 회원 비밀번호
            $table->string('name',1000); // 회원 이름
            $table->string('Phone_num',100); //회원 폰번호
            $table->string('Tell_num',100); // 회원 다른 연락처
            $table->string('User_address',1000); // 회원 주소
            $table->string('user_email',50); // 회원 이메일 주소 
            $table->integer('Car_Sell_cnt')->nullable(); // 회원이 개인 판매중인 차량수
            $table->timestamp('last_used_at')->nullable(); //마지막 접속 내용
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
        //
    }
};
