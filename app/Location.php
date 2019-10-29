<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['localidad'];

    public function registereds()
    {
        return $this->hasMany('App\Registered');
    }
}
