@extends('master')
@section('content')

  @foreach ($artist as $uh)
  <li>

      {!! $uh->name !!}<br>
      {!! $uh['type'] !!}<br>
      <a href= "{{ $uh['website'] }}">{{ $uh['website'] }}</a><br>
      {!! $uh['description']!!}
      <p><a href="/artist/{{ $uh->id }}">(More!)</a><p>
      <br>


  </li>

  @endforeach



@stop
