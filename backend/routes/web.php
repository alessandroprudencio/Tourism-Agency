<?php

Route::get('/admin','Panel\PanelController@index');
Route::get('/', function () {
    return view('welcome');
});
