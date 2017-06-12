<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organisation extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function contacts()
    {
        return $this->belongsToMany('App\Contact');
    }

    public function assets()
    {
        return $this->hasMany('App\Asset');
    }
}
