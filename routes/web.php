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


Auth::routes();


Route::get('/', 'IndexController@index')->name('main');

Route::get('/locale/{locale}', function($locale){
   \Illuminate\Support\Facades\Session::put('locale', $locale);
    \Illuminate\Support\Facades\App::setLocale($locale);
   return redirect()->back();
});

Route::any('/search',function(\Illuminate\Http\Request $request){
    $q = $request->q;
    $ads = \App\Models\Ad::all();
    $newsz = \App\Models\NewzTranslation::where('title','LIKE','%'.$q.'%')->orWhere('short_description','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->get();
    if(count($newsz) > 0){

        return view('search', compact('newsz','q', 'ads'));
    }else{
        $newsz = null;
        return view ('search', compact('newsz','q', 'ads'));
    }
    dd($newsz);
});
Route::get('/category/{cslug}', 'CategoryController@index')->name('category');
Route::get('/category/{cslug}/news/{nslug}', 'NewsController@index')->name('news');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/contacts', 'ContactController@form')->name('contactable');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/comments/{nid}', 'CommentController@form')->name('comments');

Route::get('/subscribers', 'SubscriberController@form')->name('subscriber');


Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
    Route::get('/', 'IndexController@index')->name('admin.index');

    Route::group(['prefix' => 'news'], function () {
        Route::get('/', 'NewsController@index')->name('admin.news');


        Route::get('/update/{id}', 'NewsController@showUpdateForm')
            ->name('admin.news.update')->where('id', '[0-9]+');
        Route::post('/update/{id}', 'NewsController@update')
            ->where('id', '[0-9]+');

        Route::get('/create', 'NewsController@showCreateForm')->name('admin.news.create');
        Route::post('/create', 'NewsController@create');

        Route::get('/delete/{id}', 'NewsController@delete')->name('admin.news.delete');

        Route::post('/ckeditor/upload', 'NewsController@upload')->name('ckeditor.upload');

    });
    Route::group(['prefix' => 'category'], function(){
       Route::get('/', 'CategoryController@index')->name('admin.category');

       Route::get('/update/{id}', 'CategoryController@showUpdateForm')
           ->name('admin.category.update')->where('id', '[0-9]+');
       Route::post('/update/{id}', 'CategoryController@update')
            ->where('id', '[0-9]+');

        Route::get('/create', 'CategoryController@showCreateForm')->name('admin.category.create');
        Route::post('/create', 'CategoryController@create');

        Route::get('/delete/{id}', 'CategoryController@delete')->name('admin.category.delete');



    });

    Route::group(['prefix' => 'category_news'], function () {
        Route::get('/', 'CategoryNewsController@index')->name('admin.nc');
        Route::get('/new', 'CategoryNewsController@form')->name('admin.nc.new');
        Route::get('/edit/{id}', 'CategoryNewsController@form')->name('admin.nc.edit');
        Route::post('/save/{id?}', 'CategoryNewsController@save')->name('admin.nc.save');
        Route::get('/delete/{id}', 'CategoryNewsController@delete')->name('admin.nc.delete');
    });

    Route::group(['prefix' => 'comments'], function () {
        Route::get('/', 'CommentsController@index')->name('admin.comments');
        Route::get('/delete/{id}', 'CommentsController@delete')->name('admin.comments.delete');
    });
    Route::group(['prefix' => 'subscribe'], function () {
        Route::get('/', 'SubscribeController@index')->name('admin.subscribe');
        Route::get('/delete/{id}', 'SubscribeController@delete')->name('admin.subscribe.delete');
    });
    Route::group(['prefix' => 'contacts'], function () {
        Route::get('/', 'ContactController@index')->name('admin.contacts');
        Route::get('/delete/{id}', 'ContactController@delete')->name('admin.contacts.delete');
    });
    Route::group(['prefix' => 'ads'], function () {
        Route::get('/', 'AdsController@index')->name('admin.ads');
        Route::get('/edit/{id}', 'AdsController@form')->name('admin.ads.edit');
        Route::post('/save/{id?}', 'AdsController@save')->name('admin.ads.save');
    });
    Route::group(['prefix' => 'settings'], function () {
        Route::get('/update', 'SettingController@showUpdateForm')
            ->name('admin.settings.update');
        Route::post('/update/{id}', 'SettingController@update')->name('admin.settings.updateform')
            ->where('id', '[0-9]+');
    });


});