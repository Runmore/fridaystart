<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Exhibition extends Eloquent{

 protected $table = 'exhibition';

  protected $fillable=[
    'name', 'description'
  ];

  public $timestamps = false;
}
