<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public $timestamps = false;
    protected $fillable = ['barcode', 'reservering', 'soort'];
    
}
