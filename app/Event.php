<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'description', 'organizer_id', 'feature_id'
    ];

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    public function organizer()
    {
        return $this->belongsTo('App\Organizer');
    }

    public function feedbacks()
    {
        return $this->hasMany('App\EventFeedback');
    }

    public function tags()
    {
        return $this->hasMany('App\Tag');
    }
}
