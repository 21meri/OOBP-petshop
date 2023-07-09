<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    public $timestamps=false;
    use HasFactory;
    protected $fillable = [
        'name',
        'year',
        'code',
        'wight',
        'gender',
        'brand',



    ];
}
