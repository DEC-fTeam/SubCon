<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;

    //createできない値を設定する

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
