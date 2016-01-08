@extends('master')
@section('content')
<h2>Input Vendor Information</h2>

{!! Form::open(['route' => 'art.store']) !!}

<div class="form-group">
  {!! Form::label('VenueName', 'Venue Name:') !!}
  {!! Form::text('VenueName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('Venuedate', 'Venue Date:') !!}
 {!! Form::input('date', 'VenueDate', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('VenueAddress', 'Venue Address:') !!}
  {!! Form::text('VenueAddress', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('ArtistFName', 'Artist First Name:') !!}
  {!! Form::text('ArtistFName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('ArtistLName', 'Artist Last Name:') !!}
  {!! Form::text('ArtistLName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('VenueDescription', 'Venue Description:') !!}
  {!! Form::textarea('VenueDescription', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('VenueAddress', 'Venue Address:') !!}
  {!! Form::submit('Update Venue Information', null, ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}
@stop
