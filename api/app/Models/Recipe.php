<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'recipe', 'cocktail_id',
    ];

    public function cocktails()
    {
        return $this->hasMany(Cocktail::class, 'cocktail_id');
    }
}
