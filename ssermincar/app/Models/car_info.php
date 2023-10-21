<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class car_info extends Model
{
    use HasFactory, SoftDeletes;

    protected $table='car_info';

    protected $fillable = [
                            'Car_identNum',
                            'Car_Registnum',
                            'Car_Name',
                            'Car_Type',
                            'Car_CC',
                            'Car_electPower',
                            'Car_wegith',
                            'Car_km',
                            'Car_enbgrade',
                            'Car_img_path',
                            'Check_exgist',
                            'Get_change_cnt',
                            'Seller_num',
                            'User_num',
                            'Car_color',
                            'Car_value',
                            'Car_maker',
                            'Car_year',
                            'Car_price',
                            'Car_sell_location',
                            'Car_gas',
                            'Car_transmisson',
                            'Car_transmisson_type',
                            'Car_engin_type',
                            'Car_selling_method',
                            'Car_regist_date',
                            'Car_model',
                            'Car_grade',
                            'Car_address',
                            ] ;

    protected $dates = ['deleted_at'];


}
