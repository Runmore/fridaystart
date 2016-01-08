<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class art extends Eloquent{

  protected $fillable=[
    'VenueName', 'VenueDate', 'VenueAddress', 'ArtistFName', 'ArtistLName', 'VenueDescription'
  ];

}
