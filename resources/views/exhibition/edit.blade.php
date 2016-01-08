@extends('master')
@section('content')
<h2>Input Vendor Information</h2>


{!! Form::model($art, ['url' => 'exhibition/' . $art->id, 'method' => 'PATCH']) !!}

<div class="form-group">
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

  {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit('Update Venue Information', null, ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@stop
