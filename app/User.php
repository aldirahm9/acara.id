<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role','organizer_id','accepted', 'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function tickets() {
        return $this->hasMany('App\Ticket');
    }

    public function organizer() {
        return $this->belongsTo('App\Organizer');
    }

    public function feedback()
    {
        return $this->hasOne('App\EventFeedback');
    }

    public function isAdmin() {
        if($this->role==1)
            return true;
        else
            return false;

    }

    public function isOrganizer() {
        if($this->organizer_id!=null)
            return true;
        else
            return false;

    }

    public function isOrganizerAdmin() {
        if($this->admin==1)
            return true;
        else
            return false;
    }

    public function setAsAdmin() {
        $this->role = 1;
    }

    

}
