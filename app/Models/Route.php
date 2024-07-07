<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Route extends Model
{
    protected $fillable = [
        'name',
        //'slug', 
        'short_descrip',
        'icon',
    ];
    use HasFactory; 
}
