<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class check_company extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'check_company';

    
}
