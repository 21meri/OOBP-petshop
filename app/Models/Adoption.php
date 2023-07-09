<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    public $timestamps=false;
    use HasFactory;

    protected $fillable=[
        'code',
        'date',
        'name',
        'description',
        'worker',
        'cat',
    ];
}
