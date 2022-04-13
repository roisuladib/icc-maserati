<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeTab extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'tab_1', 'tab_2', 'tab_3', 'tab_4', 'tab_5',
    ];
    protected $hidden = [

    ];
}
