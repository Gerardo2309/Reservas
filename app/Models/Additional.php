<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    protected $fillable = [
        'name',
    ];
    use HasFactory;
}
