<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaravelBbs extends Model
{
    use HasFactory;

    //　テーブル名
    protected $table = 'laravel_bbses';

    // ::create()用
    protected $guarded = [];
}
