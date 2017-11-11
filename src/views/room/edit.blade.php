@extends('layouts.app')

@section('content')
  <h1>Edit Rooms: {{ $Rooms->nama_room}}</h1>
  <hr>
  <div class="row">
    <div class="col-md-12">

      {{-- Uses a named route ------------------------------------------------}}
      {{-- See: https://laravelcollective.com/docs/5.3/html#opening-a-form ---}}
      {!! Form::model($Rooms, ['method'=> 'PATCH', 'route'=>['rooms.update', $Rooms->id], 'files'=>true]) !!}
        @include('room.form', ['submitButtonText' => 'Update Rooms'])
      {!! Form::close() !!}

{{-- @TODO: ADD ERRORS  --}}
      {{-- @include ('errors.list') --}}

    </div>
  </div>

@stop
