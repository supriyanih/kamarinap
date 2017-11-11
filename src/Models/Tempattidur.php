<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempattidur extends Model
{
     protected $table = 'tempat_tidur';

     function ranjang()
     {
     	$this->belongTo('App\Room','room_id');
     }
}
