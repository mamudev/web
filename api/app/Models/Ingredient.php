<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ingredient', 'cocktail_id',
    ];

    public function cocktails()
    {
        return $this->hasMany(Cocktail::class, 'cocktail_id');
    }
}
