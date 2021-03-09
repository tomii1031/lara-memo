<?php

Auth::routes();
Route::get('/', 'MemoController@index')->name('memos.index');
Route::resource('/memos', 'MemoController')->except(['index', 'show'])->middleware('auth');
Route::resource('/memos', 'MemoController')->only(['show']);
