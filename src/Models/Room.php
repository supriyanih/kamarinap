<?php

namespace Supriyanih\Kamarinap\Models;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';
    protected $fillable = [
      'kode_room',
      'nama_room'
    ];

    function ranjang()
    {
    	$this->hasMany('App\Tempattidur','room_id');
    }
}
