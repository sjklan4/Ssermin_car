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
            $table->string('Car_img_path',1000)->nullable(); // 이미지 저장 경로 저장 컬럼
            $table->char('Check_exgist',1)->default(0); // 진단검사 유무 - 0은 무 1은 진행완료
            $table->integer('Get_change_cnt'); // 소유주 변경 횟수
            $table->integer('Seller_num')->nullable(); // 판매자 일련 번호
            $table->integer('User_num')->nullable(); // 일반사용자 일련 번호
            $table->string('Car_color',500); //차량 색상
            $table->integer('Car_value'); // 차량 승차 정원(인승)
            $table->string('Car_maker',1000); // 차량 제조사
            $table->string('Car_year',1000);  // 차량 연식       
            $table->integer('Car_price');   //차량 가격            
            $table->string('Car_sell_location', 1000); //차량 판매 중인 지역
            $table->string('Car_gas',100); // 차량 연료(경유, 휘발유, LPG, 전기)
            $table->string('Car_transmisson',500); // 변속기 종류(수동-N단, 자동-N단, CVT-무단변속)
            $table->string('Car_transmisson_type',500); // 변속기 형식(ZFn단, DCT, 토크컨버터(자동), )
            $table->string('Car_engin_type',500); //차량 엔진타입(가솔린, 디젤, LPG, 하이브리드, 전기)   
            $table->char('Car_selling_method',1); // 판매 방식(0:일반, 1: 리스, 2:렌트, 3:카드론(*주요수익처*) )
            $table->date('Car_regist_date'); // 연식/등록일자 구분을 위한것
            $table->string('Car_model',500); // 차량 모델(g70,g80, m3,m4등등)
            $table->string('Car_grade',1000); // 차량 등급(베이지, 노블, 프레, 인텔 등)       
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
