<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Document</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>

  <div class="container">
      <h1>First Friday Backend</h1>
      @foreach ($art as $thing)
      {{ hello}}
            {!! $thing['VenueName'] !!}
            <br>
      <!--  {!! $art['VenueDate'] !!}
            <br> -->
            {!! $thing['VenueAddress'] !!}
            <br>
            <!--
            {!! $art['ArtistFName'] !!}
            <br>
            {!! $art['ArtistLName'] !!}
            <br>
            -->
            {!! nl2br($thing['VenueDescription']) !!}
            <br> <br> <br>
        @endforeach


  </div>

</body>
</html>
