<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locatioin extends Model
{
    protected $fillable = [
      'city','utc','created_at','updated_at',
    ];
}
