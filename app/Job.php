<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    protected $fillable = [
        'name','status','overdue', 'deadline_id',
    ];
}
