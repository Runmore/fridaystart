@extends('master')
@section('content')
<h2>Input Vendor Information</h2>

{!! Form::open(['route' => 'exhibition.store']) !!}

<div class="form-group">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('description', 'Description:') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

  {!! Form::submit('Update Exhbition Information', null, ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}
@stop
