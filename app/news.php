<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class news extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'users_id', 'title', 'content', 'date', 'photo', 'youtube', 'slug'
    ];
    protected $hidden = [

    ];
    public function photo() {
        return $this->hasMany(NewsPhotos::class, 'photos_id', 'id');
    }
    public function user() {
        return $this->hasOne(User::class, 'id', 'users_id');
    }
    public function video() {
        return $this->hasMany(NewsVideo::class, 'videos_id', 'id');
    }
}
