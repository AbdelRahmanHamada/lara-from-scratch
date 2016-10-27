<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('cards','cardsController@index');

Route::get('cards/{card}','cardsController@show')->name('cards');

Route::post('cards/{card}/notes','notesController@store');

Route::get('notes/{note}/edit','notesController@edit');

Route::patch('notes/{note}','notesController@update');

Auth::routes();

Route::get('/home', 'HomeController@index');
