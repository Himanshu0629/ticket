<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'price';

    protected $fillable = ['id', 'nepali_rupee','indian_rupee', 'american_dollar', 'australian_dollar', 'pound_sterling','euro'];
}
