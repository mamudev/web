<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'description', 'video', 'foto_header', 'foto_gallery', 'foto_sheet', 'url', 'order',
    ];

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class, 'cocktail_id');
    }

    public function recipes()
    {
        return $this->hasMany(Recipe::class, 'cocktail_id');
    }
}
