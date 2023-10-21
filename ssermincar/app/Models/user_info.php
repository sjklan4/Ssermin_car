<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class user_info extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'user_info';

    protected $guarded = ['User_ID'];

    protected $fillable = ['User_ID','password','User_name','Phone_num','Tell_num','User_address','User_email'];
    protected $dates = ['deleted_at'];
    
}
