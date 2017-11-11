@extends('layouts.app')

@section('content')
    <h1>{{ $ruang->kode_room }}</h1>
    <h2>By: {{ $ruang->nama_room }}</h2>
    

<hr>

<a href="{!! action('\Supriyanih\Kamarinap\Controllers\RoomController@edit', ['id' => $ruang->id]) !!}" class="btn btn-default">Edit &raquo;</a>



@stop
