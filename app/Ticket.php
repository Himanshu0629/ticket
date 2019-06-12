<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket';

    protected $fillable = ['id', 'seat_number', 'column', 'row', 'seat_status', 'status'];
}
