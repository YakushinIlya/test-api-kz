<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'head',
    ];

    public function films()
    {
        return $this->belongsToMany('App\Models\Films', 'categories_films', 'category_id', 'film_id');
    }
}
