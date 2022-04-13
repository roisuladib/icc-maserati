<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title', 'description', 'email', 'facebook', 'instagram', 'tweeter', 'whatsapp', 'youtube', 'copyright', 'popchat'
    ];
    protected $hidden = [
        
    ];
}
