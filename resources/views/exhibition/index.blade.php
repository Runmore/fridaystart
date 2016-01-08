@extends('master')
@section('content')

  @foreach ($exhibition as $uh)
  <li>

      {!! $uh->name !!}<br>
      {!! $uh['description']!!}
      <p><a href="/exhibition/{{ $uh->id }}">(More!)</a><p>
      <br>


  </li>

  @endforeach



@stop
