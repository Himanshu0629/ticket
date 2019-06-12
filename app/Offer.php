<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offer';

    protected $fillable = ['id', 'week_end', 'special_offer']; 

}
