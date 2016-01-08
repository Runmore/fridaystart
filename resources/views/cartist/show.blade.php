@extends('master')
@section('content')



      {!! $art['name'] !!}
      <br>
      {!! $art['type'] !!}
      <br>
      {!! $art['website'] !!}
      <br>
      {!! $art['education'] !!}
      <br>
      {!! nl2br($art['description']) !!}



@stop
