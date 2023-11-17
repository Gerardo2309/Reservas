<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'address',
        'position',
    ];


    use HasFactory;

    public function agencies(): BelongsToMany
    {
        return $this->belongsToMany(Agency::class);
    }
}
