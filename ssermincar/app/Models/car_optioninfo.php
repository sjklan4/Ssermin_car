<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class car_optioninfo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'car_optioninfo';

    protected $fillable = [
                            'Car_num',
                            'sunroof',
                            'head_ramp',
                            'power_trunk',
                            'ghost_closer',
                            'auto_sidemirror',
                            'aluminum_wheel',
                            'roof_rack',
                            'warmming_steering',
                            'auto_controller_streering',
                            'paddle_shift',
                            'streering_limotcnt',
                            'ECMroom_mirror',
                            'hiway_pass',
                            'power_doorlock',
                            'powersteering',
                            'powerwindow',
                            'airback',
                            'airback_side',
                            'airback_curtain',
                            'ABS_break',
                            'TCS',
                            'ESC',
                            'TPMS',
                            'LDWS',
                            'ECS',
                            'front_senser',
                            'back_senser',
                            'back_sidesensor',
                            'back_camera',
                            'around_view',
                            'autopilot',
                            'autopilot_addplus',
                            'HUD',
                            'EPB',
                            'autocnt_aircon',
                            'smartkey',
                            'remote_lock',
                            'rainsensor',
                            'auto_right',
                            'sheet_curtain',
                            'nav',
                            'front_AVmoniter',
                            'back_AVmoniter',
                            'bluetooth',
                            'CD_playier',
                            'USB_flug',
                            'AUX',
                            'leather_sheet',
                            'elect_sheet',
                            'warm_sheet_F',
                            'warm_sheet_B',
                            'memory_sheet',
                            'ventle_sheet_f',
                            'ventle_sheet_B',
                            'masage_sheet',
                            'del_flg',
                        ];
    protected $dates = ['deleted_at'];
}
