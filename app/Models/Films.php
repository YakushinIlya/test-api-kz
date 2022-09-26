<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    use HasFactory;

    protected $table = 'films';

    protected $fillable = [
        'head', 'status', 'poster',
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Categories', 'categories_films', 'film_id', 'category_id');
    }
}
