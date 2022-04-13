<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeHeader;
use App\HomeLatarBelakang;
use App\HomeTab;
use App\Footer;
use App\news;
use App\NewsPhotos;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $headers = HomeHeader::query()->get();
        $latar   = HomeLatarBelakang::first();
        $tabs    = HomeTab::first();
        $news    = news::query()->get();
        $photos  = NewsPhotos::query()->get();
        $footer  = Footer::first();
        // dd($photos);
        return view('pages.index', [
            'headers' => $headers,
            'latar'   => $latar,
            'tabs'    => $tabs,
            'news'    => $news,
            'photos'  => $photos,
            'footer'  => $footer
        ]);
    }
}
