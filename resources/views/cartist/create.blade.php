@extends('master')
@section('content')
<h2>Input Vendor Information</h2>

{!! Form::open(['route' => 'artist.store']) !!}

<div class="form-group">
  {!! Form::label('name', 'Artist Name:') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('type', 'Type of Art:') !!}
 {!! Form::input('type', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('website', 'Website:') !!}
  {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('education', 'Education:') !!}
  {!! Form::text('education', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('description', 'Additional description:') !!}
  {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit('Update Artist Information', null, ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}
@stop
