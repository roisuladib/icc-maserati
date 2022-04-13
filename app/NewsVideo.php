<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsVideo extends Model
{
    protected $fillable = [
        'videos_id', 'link'
    ];
    protected $hidden = [

    ];
    public function news() {
        return $this->belongsTo(News::class, 'videos_id', 'id');
    }
}
