<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    //
   protected $table = 'venue';

   protected $fillable=[
     'VenueName', 'VenueDate', 'VenueAddress', 'ArtistFName', 'ArtistLName', 'VenueDescription'
   ];

   public $timestamps = false;

   protected $dates = ['VenueDate'];
}
