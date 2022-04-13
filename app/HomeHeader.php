<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeHeader extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'photo', 'description', 'name', 'job'
    ];
    protected $hidden = [

    ];
}
