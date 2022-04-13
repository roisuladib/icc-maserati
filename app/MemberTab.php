<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberTab extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'tab1', 'tab2', 'tab3', 'tab4', 'tab5',
    ];
    protected $hidden = [

    ];
}
