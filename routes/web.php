<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//hasONe
Route::get('hasOne', 'OneToOneController@index')->name('hasOne');
Route::get('hasOneStore', 'OneToOneController@store')->name('hasOneStore');
Route::get('mailing/{token}', 'MaillingController@unsubscribe')->name('mailing');

//hasMany
Route::get('hasMany', 'HasMany\TopicController@index')->name('hasManyIndex');
Route::get('hasManyStore', 'HasMany\TopicController@store')->name('hasManyStore');
Route::get('hasManyShow/{topic}', 'HasMany\TopicController@show')->name('hasManyShow');
Route::get('hasManyUserTopic', 'HasMany\UserTopicController@index')->name('hasManyUserTopic');
