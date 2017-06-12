<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function organisations()
    {
        return $this->belongs('App\Organisation');
    }
}