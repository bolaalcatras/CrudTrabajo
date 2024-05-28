<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function student () {
        return $this->hasMany('App\Models\student');
    }

    public function instructor () {
        return $this->belongsTo('App\Models\instructor');
    }
}
