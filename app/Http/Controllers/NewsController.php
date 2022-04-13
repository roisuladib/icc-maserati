<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\news;
use App\Footer;
class NewsController extends Controller
{
    public function news() {
        // $response = Http::get('http://saebo.technology/ic/mac-android/list_berita.php');
        // $datas = $response->json();
        $banners = news::with(['photo'])->latest()->paginate(3);
        $news = news::with(['photo'])->first()->paginate(6);
        $footer  = Footer::first();
        // dd($news);
        return view('pages.news', [
            // 'datas' => $datas,
            'news'    => $news,
            'banners' => $banners,
            'footer'  => $footer
        ]);
    }
    public function news_detail(Request $request, $id) {
        $news = news::with(['photo'])->where('slug', $id)->firstOrFail();
        $photos = news::with(['photo'])->get();
        $footer  = Footer::first();
        return view('pages.news-detail', [
            'news'   => $news,
            'photos' => $photos,
            'footer' => $footer
        ]);
    }
}
