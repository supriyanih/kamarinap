@extends('layouts.app')

@section('content')
    <h1>Create Kelas Rawat Inap</h1>
    <hr>
    <div class="row">
        <div class="col-md-8">

            {{-- Uses a named route ------------------------------------------------}}
            {!! Form::open(['route'=>['rooms.store', 'store'], 'files'=>true]) !!}
            @include('room.form', ['submitButtonText' => 'Create Rooms'])
            {!! Form::close() !!}

            {{-- @include ('errors.list') --}}

        </div>
    </div>

@stop
