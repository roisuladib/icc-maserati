<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsPhotos extends Model
{
    protected $fillable = [
        'photos_id', 'link'
    ];
    protected $hidden = [

    ];
    public function news() {
        return $this->belongsTo(News::class, 'photos_id', 'id');
    }
}
