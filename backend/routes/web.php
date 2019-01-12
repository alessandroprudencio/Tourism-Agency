<?php

Route::get('/admin','Panel\PanelController@index')->name('admin');




Route::get('/','Site\SiteController@index')->name('home');
Route::get('/promocoes','Site\SiteController@promotions')->name('promotions');

Auth::routes();

