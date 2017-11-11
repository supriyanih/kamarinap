@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Kode -------------------------------------------------------------------}}
<div class="form-group">
  {!! Form::label('kode') !!}
  {!! Form::text('kode_room', null, ['class'=> 'form-control']) !!}
</div>

{{-- Kelas Ruangan Inap -------------------------------------------------------------------}}
<div class="form-group">
  {!! Form::label('nama_room') !!}
  {!! Form::text('nama_room', null, ['class'=> 'form-control']) !!}
</div>

{{-- submit ------------------------------------------------------------------}}
<div class="form-group">
  {!! Form::submit($submitButtonText, null, ['class'=> 'btn btn-primary form-control']) !!}
</div>
