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
            $table->id(); // Assuming you want an auto-increment primary key.
            $table->integer('Car_Num')->autoIncrement()->comment('등록차량 순번');
            $table->char('power_gate', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)');
            $table->char('aluminum_wheel', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)');
            $table->char('sunroof', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)');
            $table->char('auto_sidemirror', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)');
            $table->char('auto_titlecap', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)');
            $table->char('roof_spoiler', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)');
            $table->char('PTO', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)');
            $table->char('auto_cover', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)');
            $table->char('grease_inserter', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)');
            $table->char('DPF', 1)->nullable()->default(0)->comment('외관(0 : 없음 / 1 : 있음)');
            $table->char('CD_playier', 1)->nullable()->default(0)->comment('멀티미디어(0:없음 / 1: 있음)');
            $table->char('AUX', 1)->nullable()->default(0)->comment('멀티미디어(0:없음 / 1: 있음)');
            $table->char('USB_flug', 1)->nullable()->default(0)->comment('멀티미디어(0:없음 / 1: 있음)');
            $table->char('streering_limotcnt', 1)->nullable()->default(0)->comment('내장(0:없음 / 1: 있음)');
            $table->char('power_streering', 1)->nullable()->default(0)->comment('내장(0:없음 / 1: 있음)');
            $table->char('ventle_sheet', 1)->nullable()->default(0)->comment('내장(0:없음 / 1: 있음)');
            $table->char('leather_sheet', 1)->nullable()->default(0)->comment('내장(0:없음 / 1: 있음)');
            $table->char('warm_sheet_f', 1)->nullable()->default(0)->comment('내장(0:없음 / 1: 있음)');
            $table->char('warm_bad', 1)->nullable()->default(0)->comment('내장(0:없음 / 1: 있음)');
            $table->char('ECM', 1)->nullable()->default(0)->comment('내장(0:없음 / 1: 있음)');
            $table->char('auxiliary_brack', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)');
            $table->char('ABS', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)');
            $table->char('ASR/TCS', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)');
            $table->char('AIR_brack', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)');
            $table->char('TPMS', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)');
            $table->char('EHS', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)');
            $table->char('AIR_back', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)');
            $table->char('back_camera', 1)->nullable()->default(0)->comment('안전(0 : 미적용 / 1:적용)');
            $table->char('AIR_condition', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)');
            $table->char('auto_AIRcon', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)');
            $table->char('NO_engin_cluster', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)');
            $table->char('remote_lock', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)');
            $table->char('power_window', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)');
            $table->char('cruze_cnt', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)');
            $table->char('nav', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)');
            $table->char('refriger_warmmer', 1)->nullable()->default(0)->comment('편의( 0: 미적용 / 1: 적용)');
            
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
