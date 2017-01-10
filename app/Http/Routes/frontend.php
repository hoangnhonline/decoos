<?php

Route::group(['namespace' => 'Frontend'], function()
{
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
    Route::get('/lang/set-lang', ['as' => 'set-lang', 'uses' => 'HomeController@setLang']);
    Route::get('/{slug}', ['as' => 'danh-muc-cha', 'uses' => 'CateController@index']);
    Route::post('/send-contact', ['as' => 'send-contact', 'uses' => 'ContactController@store']);
    Route::post('/set-service', ['as' => 'set-service', 'uses' => 'CartController@setService']);    
    
    Route::get('chi-tiet/{slug}-{id}.html', ['as' => 'chi-tiet-vi', 'uses' => 'DetailController@index']);
    Route::get('detail/{slug}-{id}.html', ['as' => 'chi-tiet-en', 'uses' => 'DetailController@index']);
    Route::get('tag/{slug}', ['as' => 'tag', 'uses' => 'OtherController@tag']);

    Route::get('album/{slug}-{id}.html', ['as' => 'chi-tiet-album', 'uses' => 'AlbumController@detail']);
    Route::get('bo-suu-tap.html', ['as' => 'album-vi', 'uses' => 'AlbumController@index']);
    Route::get('collection.html', ['as' => 'album-en', 'uses' => 'AlbumController@index']);

    Route::get('video/{slug}-{id}.html', ['as' => 'video-detail', 'uses' => 'VideoController@detail']);
    Route::get('video.html', ['as' => 'video', 'uses' => 'VideoController@index']);

    Route::get('tin-tuc/{slug}-{id}.html', ['as' => 'news-detail-vi', 'uses' => 'NewsController@detail']);
    Route::get('news/{slug}-{id}.html', ['as' => 'news-detail-en', 'uses' => 'NewsController@detail']);

    Route::get('news.html', ['as' => 'news-en', 'uses' => 'NewsController@index']);
    Route::get('tin-tuc.html', ['as' => 'news-vi', 'uses' => 'NewsController@index']);

    Route::get('{slugLoaiSp}/{slug}/', ['as' => 'danh-muc-con', 'uses' => 'CateController@cate']);    
    
    Route::get('/tim-kiem.html', ['as' => 'search', 'uses' => 'HomeController@search']);   
    Route::get('contact.html', ['as' => 'contact-en', 'uses' => 'HomeController@contact']);
    Route::get('lien-he.html', ['as' => 'contact-vi', 'uses' => 'HomeController@contact']);
    Route::get('{slug}.html', ['as' => 'pages', 'uses' => 'PageController@index']);

});