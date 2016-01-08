@extends('master')
@section('content')

  @foreach ($venue as $uh)
  <li>

      {!! $uh->VenueName !!}<br>
      {!! $uh['VenueAddress'] !!}<br>
      {!! $uh['VenueDescription']!!}
      <p><a href="/venue/{{ $uh->id }}">(More!)</a><p>
      <br>


  </li>

  @endforeach



@stop
