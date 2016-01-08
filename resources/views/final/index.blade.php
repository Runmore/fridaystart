@extends('master')
@section('content')

  @foreach ($venue as $uh)
  <li>

      {!! $uh->VenueName !!}
      <br>
      <?php
      $small = substr($uh['VenueDescription'], 0, 300);
      echo($small)
      ?>
      <p><a href="/Art/{{ $uh->id }}">(More!)</a><p>
      <br>

  </li>

  @endforeach



@stop
