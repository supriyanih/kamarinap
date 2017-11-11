@extends('layouts.app', ['body_class' => 'rooms index'])
@section('bodyClass', ' class="rooms index"')

@section('content')
    <h1>Data Ruangan Rawat Inap</h1>
    <h3> <a href="{!! action('\Supriyanih\Kamarinap\Controllers\RoomController@create') !!}" class="btn btn-default btn-sm">Create &raquo;</a></h3>
   <div class="table-responsive">
    <table class="table table-striped  b-t">
         <thead>
        <tr>
            <th>Kode</th>
            <th>Nama Room</th>
            <th>Aksi</th>
        </tr>
        </thead>
         <tbody>
     
    @foreach($Rooms as $room)
      <tr>   
       <td>{{$room->kode_room}}</td>
       <td>{{ $room->nama_room }}</td>
       <td class="text-center"><a href="{!! action('\Supriyanih\Kamarinap\Controllers\RoomController@show', ['id' => $room->id]) !!}" class="btn btn-default btn-sm">More &raquo;</a>
        <a href="{!! action('\Supriyanih\Kamarinap\Controllers\RoomController@edit', ['id' => $room->id]) !!}" class="btn btn-default btn-sm">Edit &raquo;</a>

                            <form method="POST" action="{{ route('rooms.destroy', [$room->id]) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-sm btn-warning">Delete</button>
                            </form></td>
            
        </tr>
             
        @endforeach
        
         </tbody>
         </table>
     </div>
    @stop
    @push('footer-jquery-scripts')
       
    @endpush
