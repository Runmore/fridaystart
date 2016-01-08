@extends('master')
@section('content')
<h2>Input Vendor Information</h2>


{!! Form::model($art, ['url' => 'artist/' . $art->id, 'method' => 'PATCH']) !!}

<div class="form-group">
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

 {!! Form::input('type', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

  {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

  {!! Form::text('education', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

  {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
  {!! Form::submit('Update Artist Information', null, ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@stop
