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
        Schema::create('truck_option', function (Blueprint $table) {
            $table->bigIncrements('truck_id');
            $table->foreignId('Car_num')->constrained('car_info'); // Assuming you want an auto-increment primary key.
            $table->char('power_gate', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)');//파워게이트 리프트
            $table->char('aluminum_wheel', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)');//알루미늄휠
            $table->char('sunroof', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)'); //선루프
            $table->char('auto_sidemirror', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)'); //전동식 접이 사이드미러
            $table->char('auto_titlecap', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)'); // 전동 틸팅캡
            $table->char('roof_spoiler', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)'); // 루프 스포일러(천장에 있는 바람 저항감소)
            $table->char('PTO', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)'); // 엔진 동력 추출하여 펌프등을 구동하는 기계
            $table->char('auto_cover', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)'); //자동 호루 덮게
            $table->char('grease_inserter', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)'); // 자동 구리스 주입기
            $table->char('DPF', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)');// 매연 저감 장치
            $table->char('CD_playier', 1)->nullable()->default(0)->comment('멀티미디어(0:없음 / 1: 있음)'); // CD 플레이어
            $table->char('AUX', 1)->nullable()->default(0)->comment('멀티미디어(0:없음 / 1: 있음)'); //AUX단자
            $table->char('USB_flug', 1)->nullable()->default(0)->comment('멀티미디어(0:없음 / 1: 있음)'); // USB단자
            $table->char('streering_limotcnt', 1)->nullable()->default(0)->comment('내장(0:없음 / 1: 있음)'); // 핸들 리모컨 기능
            $table->char('power_streering', 1)->nullable()->default(0)->comment('내장(0:없음 / 1: 있음)'); // 파워핸들
            $table->char('ventle_sheet', 1)->nullable()->default(0)->comment('내장(0:없음 / 1: 있음)');// 통풍 시트
            $table->char('leather_sheet', 1)->nullable()->default(0)->comment('내장(0:없음 / 1: 있음)'); //가죽 시트
            $table->char('warm_sheet_f', 1)->nullable()->default(0)->comment('내장(0:없음 / 1: 있음)');// 열선 시트
            $table->char('warm_bad', 1)->nullable()->default(0)->comment('내장(0:없음 / 1: 있음)'); //열선 슬리핑 베드
            $table->char('ECM', 1)->nullable()->default(0)->comment('내장(0:없음 / 1: 있음)'); // 전동식 룸미러
            $table->char('auxiliary_brack', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)'); //엔진브레이크(리타더)
            $table->char('tacometer')->nullable()->default(0);// 타코메타-운전에 관한 데이터 수집기
            $table->char('ABS', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)'); //abs시스템
            $table->char('ASR/TCS', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)'); // 미끄럼 방지
            $table->char('AIR_brack', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)'); // 에어 브레이크
            $table->char('TPMS', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)');//공기압 센서
            $table->char('EHS', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)'); //언덕길 밀림 방지 보조 장치
            $table->char('AIR_back', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)'); //에어백
            $table->char('back_camera', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)'); // 후방 카메라
            $table->char('AIR_condition', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)'); // 일반 에어컨
            $table->char('auto_AIRcon', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)'); // 자동 에어컨
            $table->char('NO_engin_cluster', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)'); // 무시동 히터 에어컨
            $table->char('remote_lock', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)'); // 무선 도어장치 -무선키
            $table->char('power_window', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)'); //파워 윈도우
            $table->char('cruze_cnt', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)'); //크로즈 컨트롤
            $table->char('nav', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)'); // 내비게이션
            $table->char('refriger_warmmer', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)'); // 냉온장고
            $table->char('wingbody',1)->default(0);//윙바디 유무
            $table->char('Cargo_crain',1)->default(0);//카고 크레인 유무
            $table->softDeletes();
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
