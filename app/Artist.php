<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Artist extends Eloquent{

 protected $table = 'artists';

  protected $fillable=[
    'name', 'type', 'website', 'education', 'description'
  ];

  public $timestamps = false;
}
