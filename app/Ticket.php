<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'name','price','limit','onsale', 'event_id'
    ];

    public function user() {
        return $this->belongsToMany('App\User');
    }

    public function event() {
        return $this->belongsTo('App\Event');
    }
}
