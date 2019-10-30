<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    protected $fillable = [
        'name', 'picture', 'description'
    ];

    public function members()
    {
        return $this->hasMany('App\User')->withPivot(['accepted','admin']);
    }

    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
