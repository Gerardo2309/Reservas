<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_tour extends Model
{
    protected $fillable = [
        'name',
    ];

    use HasFactory;


    public function tours(){
        return $this->hasMany(Tour::class);
    }
}
