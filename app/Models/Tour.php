<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Tour extends Model
{
    protected $fillable = [
        'name',
        'slug', 
        'description',
        'tipo_tour_id',
    ];


    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function tipo(): BelongsTo
    {
        return $this->belongsTo(Tipo_tour::class, 'id');
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function imagenes(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function agencies(): BelongsToMany
    {
        return $this->belongsToMany(Agency::class, 'tour_agency');
    }

    public function additionals(): BelongsToMany
    {
        return $this->belongsToMany(Additional::class, 'additional_tour')->wherePivot('status', 1);
    }
    public function noadditionals(): BelongsToMany
    {
        return $this->belongsToMany(Additional::class, 'additional_tour')->wherePivot('status', 0);
    }

    public function routes(): BelongsToMany
    {
        return $this->belongsToMany(Route::class, 'route_tour');
    }
}
