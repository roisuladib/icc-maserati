<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\NewsPhotos;
use App\news;
use App\Footer;
class ActivityController extends Controller
{
    public function activity() {
        $activities = Activity::first()->get();
        $news       = news::with(['photo'])->get();       
        $news_lates = news::first();       
        $photos     = NewsPhotos::query()->get();
        $footer     = Footer::first();
        // dd($news_lates);
        return view('pages.activity', [
            'activities' => $activities,
            'news'       => $news,
            'news_lates' => $news_lates,
            'photos'     => $photos,
            'footer'     => $footer,
        ]);
    }
}
