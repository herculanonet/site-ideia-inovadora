<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function()
{  
    Route::get('/', 'PagesController@index')->name('pages.index');
    Route::get('/blog', 'PagesController@blog')->name('pages.blog');
    Route::get('/about', 'PagesController@about')->name('pages.about');
    Route::get('/pricing', 'PagesController@pricing')->name('pages.pricing');
    Route::get('/faqs', 'PagesController@faqs')->name('pages.faqs');

    Route::post('/login', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');

});
