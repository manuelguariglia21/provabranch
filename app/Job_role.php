<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_role extends Model
{
    public function users() {
        return $this->belongsToMany('App\User');
    }
}
