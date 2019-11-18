<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'name','price','limit','onsale', 'event_id'
    ];

    public function users() {
        return $this->belongsToMany('App\User')->withPivot('approved','receipt','checkin')->withTimestamps();
    }

    public function event() {
        return $this->belongsTo('App\Event');
    }

    public function getTicketStatus()
    {
        if($this->pivot->receipt == null) {
            return 1;   //NOTE: 1 itu dia belom ngasih bukti
        }elseif($this->pivot->approved != 1) {
            return 2;   //NOTE: 2 itu dia udah ngasih bukti tapi belom di approve
        }elseif($this->pivot->approved == 1) {
            return 3;   //NOTE: 3 itu berarti tiket udah approved fix
        }
    }
}
