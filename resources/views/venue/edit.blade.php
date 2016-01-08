@extends('master')
@section('content')
<h2>Input Vendor Information</h2>


{!! Form::model($art, ['url' => 'venue/' . $art->id, 'method' => 'PATCH']) !!}

<div class="form-group">
  {!! Form::text('VenueName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

 {!! Form::input('date', 'VenueDate', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

  {!! Form::text('VenueAddress', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

  {!! Form::text('ArtistFName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

  {!! Form::text('ArtistLName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

  {!! Form::textarea('VenueDescription', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit('Update Venue Information', null, ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@stop
