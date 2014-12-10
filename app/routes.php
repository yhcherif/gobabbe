<?php

Route::get('/', ['as'=>'home', 'uses'=>'PagesController@index']);


/*
 * Login / Register
 */
Route::get('/login', ['as'=>'session.index', 'uses' =>'SessionController@index']);
Route::get('/register', ['as'=>'session.create', 'uses' =>'SessionController@create']);
Route::get('/logout', ['as'=>'session.destroy', 'uses' =>'SessionController@destroy']);



// post
Route::post('/login', ['as'=>'session.login', 'uses' =>'SessionController@login']);
Route::post('/register', ['as'=>'session.store', 'uses' =>'SessionController@store']);
