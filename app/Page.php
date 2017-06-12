<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function asset()
    {
        return $this->belongsTo('App\Asset');
    }
}
