<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movie';

    protected $fillable = ['id', 'bollywood', 'hollywood', 'kollywood', 'south_indian'];
}
