<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear-cache', function() {
   Artisan::call('cache:clear');
   return "Cache is cleared";
});

Route::get('/', 'HomeController@index')->name('/');
Route::get('/member', 'MemberController@member')->name('member');
Route::get('/activity', 'ActivityController@activity')->name('activity');
Route::get('/news', 'NewsController@news')->name('news');
Route::get('news/{id}', 'NewsController@news_detail')->name('news-detail');

Route::prefix('adib')
   ->namespace('Admin')
   ->middleware(['auth', 'admin'])  
   ->group(function() {
      Route::get('/', 'AdminController@index')->name('admin');        
      Route::resource('/home/headers', 'HomeHeaderController');
      Route::resource('/home/latar-belakang', 'HomeLatarBelakangController');
      Route::resource('/home/tabs', 'HomeTabController');
      Route::resource('/member/level', 'MemberLevelController');
      Route::resource('/member/tab', 'MemberTabController');
      Route::resource('/users', 'UserController');
      Route::resource('/footer', 'FooterController');
      Route::resource('/activities', 'ActivityController');
      Route::resource('/news', 'NewsController');
      Route::resource('/news-photos', 'NewsPhotoController');
   });

// Route::get('testing', function() {
//    $client = Http::get('http://saebo.technology/ic/mac-android/list_berita.php')->ok();
//    dd($client);
// });


// Route::get('/news', 'NewsController@index')->name('my-news');
// Route::get('/news/create', 'NewsController@create')->name('news-create');
// Route::post('/news/store', 'NewsController@store')->name('news-store');
// Route::get('/news/edit/{id}', 'NewsController@edit')->name('news-edit');
// Route::post('/news/edit/{id}', 'NewsController@update')->name('news-update');
// Route::post('/news/photo/upload', 'NewsController@upload')->name('news-upload');
// Route::get('/news/photo/delete/{id}', 'NewsController@delete')->name('news-delete');
// Route::get('/news/photo/destroy/{id}', 'NewsController@destroy')->name('news-destroy');

Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');
Auth::routes();
