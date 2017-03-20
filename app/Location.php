<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
      'address','timeZoneId','dstOffset','rawOffset','created_at','updated_at',
    ];
}
