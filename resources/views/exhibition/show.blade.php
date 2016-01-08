@extends('master')
@section('content')

      {!! $art['name'] !!}
      <br>
      {!! nl2br($art['description']) !!}

@stop
