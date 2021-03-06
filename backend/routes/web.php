<?php

Route::group(['prefix'=>'admin', 'namespace'=>'Panel'], function(){
    Route::get('linhas_aereas/{$id}/avioes','AirlineController@planes')->name('linhas_aereas.planes');

    Route::get('/','PanelController@index')->name('admin');
    Route::resource('linhas_aereas', 'AirlineController');
    
    Route::resource('avioes','PlaneController');   
});

Route::group(['prefix'=>'/', 'namespace'=>'Site'],function(){

    Route::get('/','SiteController@index')->name('home');
    Route::get('promocoes','SiteController@promotions')->name('promotions');

});



Auth::routes();

