@extends('master')
@section('content')

  @foreach ($venue as $uh)
  <li>

      {!! $uh->VenueName !!}
      <p><a href="/Art/{{ $uh->id }}">(More!)</a><p>
      {!! $uh['VenueAddress'] !!}
      {!! $uh['VenueDescription']!!}
      <br>


  </li>

  @endforeach



@stop
