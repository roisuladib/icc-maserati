<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MemberLevel;
use App\MemberTab;
use App\Footer;

class MemberController extends Controller
{
    public function member() {
        $levels = MemberLevel::query()->get();
        $tabs = MemberTab::first();
        $footer  = Footer::first();
        return view('pages.member', [
            'levels'  => $levels,
            'tab'    => $tabs,
            'footer' => $footer,
        ]);
    }
    public function sen_email() {
        
    }
}
