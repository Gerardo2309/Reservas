<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paxe extends Model
{
    protected $fillable = [
        'date',
        'adults',
        'kids',
        'q',
        'nq',
        'total',
    ];
    use HasFactory;
}
