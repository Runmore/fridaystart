@extends('master')
@section('content')



      {!! $art['VenueName'] !!}
      <br>
      {!! $art['VenueDate'] !!}
      <br>
      {!! $art['VenueAddress'] !!}
      <br>
      {!! $art['ArtistFName'] !!}
      <br>
      {!! $art['ArtistLName'] !!}
      <br>
      {!! nl2br($art['VenueDescription']) !!}






@stop
