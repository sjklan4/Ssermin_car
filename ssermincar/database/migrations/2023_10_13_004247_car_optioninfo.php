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
        Schema::create('car_optioninfo', function (Blueprint $table) {
            $table->bigIncrements('car_id');
            $table->foreignId('Car_num')->constrained('car_info'); //등록차량 정보 테이블의 참조컬럼
            $table->char('sunroof', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('head_ramp', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('power_trunk', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('ghost_closer', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('auto_sidemirror', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('aluminum_wheel', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('roof_rack', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('warmming_steering', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('auto_controller_streering', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('paddle_shift', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('streering_limotcnt', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('ECMroom_mirror', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('hiway_pass', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('power_doorlock', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('powersteering', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('powerwindow', 1)->nullable()->default(0)->comment('외관/내장 : 0없음 / 1 있음');
            $table->char('airback', 1)->nullable()->default(0)->comment('안전 0: 없음 / 1:있음');
            $table->char('airback_side', 1)->nullable()->default(0)->comment('안전 0: 없음 / 1:있음');
            $table->char('airback_curtain', 1)->nullable()->default(0)->comment('안전 0: 없음 / 1:있음');
            $table->char('ABS_break', 1)->nullable()->default(0)->comment('안전 0: 없음 / 1:있음');
            $table->char('TCS', 1)->nullable()->default(0)->comment('안전 0: 없음 / 1:있음');
            $table->char('ESC', 1)->nullable()->default(0)->comment('안전 0: 없음 / 1:있음');
            $table->char('TPMS', 1)->nullable()->default(0)->comment('안전 0: 없음 / 1:있음');
            $table->char('LDWS', 1)->nullable()->default(0)->comment('안전 0: 없음 / 1:있음');
            $table->char('ECS', 1)->nullable()->default(0)->comment('안전 0: 없음 / 1:있음');
            $table->char('front_senser', 1)->nullable()->default(0)->comment('안전 0: 없음 / 1:있음');
            $table->char('back_senser', 1)->nullable()->default(0)->comment('안전 0: 없음 / 1:있음');
            $table->char('back_sidesensor', 1)->nullable()->default(0)->comment('안전 0: 없음 / 1:있음');
            $table->char('back_camera', 1)->nullable()->default(0)->comment('안전 0: 없음 / 1:있음');
            $table->char('around_view', 1)->nullable()->default(0)->comment('안전 0: 없음 / 1:있음');
            $table->char('autopilot', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('autopilot_addplus', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('HUD', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('EPB', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('autocnt_aircon', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('smartkey', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('remote_lock', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('rainsensor', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('auto_right', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('sheet_curtain', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('nav', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('front_AVmoniter', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('back_AVmoniter', 1)->nullable()->comment('편의/멀티미디어 0:있음 / 1: 없음');
            $table->char('bluetooth', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('CD_playier', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('USB_flug', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('AUX', 1)->nullable()->default(0)->comment('편의/멀티미디어 0: 없음 / 1:있음');
            $table->char('leather_sheet', 1)->nullable()->default(0)->comment('시트(0:미적용 / 1 :적용 )');
            $table->char('elect_sheet', 1)->nullable()->default(0)->comment('시트(0:미적용 / 1 :적용 )');
            $table->char('warm_sheet_F', 1)->nullable()->default(0)->comment('시트(0:미적용 / 1 :적용 )');
            $table->char('warm_sheet_B', 1)->nullable()->default(0)->comment('시트(0:미적용 / 1 :적용 )');
            $table->char('memory_sheet', 1)->nullable()->default(0)->comment('시트(0:미적용 / 1 :적용 )');
            $table->char('ventle_sheet_f', 1)->nullable()->default(0)->comment('시트(0:미적용 / 1 :적용 )');
            $table->char('ventle_sheet_B', 1)->nullable()->default(0)->comment('시트(0:미적용 / 1 :적용 )');
            $table->char('masage_sheet', 1)->nullable()->default(0)->comment('시트(0:미적용 / 1 :적용 )');
            $table->char('del_flg',0); // 0:차량이 등록된상태, 1: 팔리거나 삭제된 상태
            $table->timestamps();
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
