<?php
Route::get('/', 'LxyjunitController@index');
Route::post('/', 'LxyjunitController@store')->name('junit.store');

// 测试路由
Route::get('test', 'TestController@index');
