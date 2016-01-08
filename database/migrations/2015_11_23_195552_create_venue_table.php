<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('venue', function (Blueprint $table) {
          $table->increments('id');
          $table->text('VenueName');
          $table->date('VenueDate');
          $table->text('VenueAddress');
          $table->text('ArtistFName')->nullable();
          $table->text('ArtistLName')->nullable();
          $table->text('VenueDescription');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('venue');
    }
}
