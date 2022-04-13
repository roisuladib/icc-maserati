<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeLatarBelakang extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'description', 'title_1', 'title_2', 'title_3', 'benefit_1', 'benefit_2', 'benefit_3'
    ];
    protected $hidden = [

    ];
}
