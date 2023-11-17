<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Agency extends Model
{

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'manager',
    ];

    use HasFactory;

    public function hotels(): BelongsToMany {
        return $this->belongsToMany(Hotel::class);
    }

    public function tours(): BelongsToMany {
        return $this->belongsToMany(Tour::class,'tour_agency');
    }
}
