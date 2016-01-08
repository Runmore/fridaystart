
<?php
use App\Venue;

Route::get('Art/exhibitions', 'ArtController@exhibitions');
//Route::get('Art/artist', 'ArtController@artist');

$router->resource('art', 'ArtController');

$router->resource('artist',   'ArtController');

$router->resource('venue',    'VenueController');

$router->resource('exhibition', 'ExhibitionController');

//get('final', 'final@create');
