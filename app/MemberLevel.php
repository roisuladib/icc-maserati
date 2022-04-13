<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberLevel extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title', 'description'
    ];
    protected $hidden = [

    ];
}
